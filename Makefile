-include env_make

IMAGE_TAG ?= latest


REGISTRY-IDS = 991404956194
REPO = $(REGISTRY-IDS).dkr.ecr.us-west-2.amazonaws.com/nrel-sustainability-web
NAME = sustainability

HEAD_VER ?= =$(shell git log -1 --pretty=tformat:%h)

ifdef ($(CODEBUILD_SOURCE_VERSION),)
  HEAD_VER=$(CODEBUILD_SOURCE_VERSION)
else
	HEAD_VER=$(shell git log -1 --pretty=tformat:%h)
endif

TAG ?= $(IMAGE_TAG)

PLATFORM ?= linux/amd64

ifneq ($(BASE_IMAGE_STABILITY_TAG),)
		BASE_IMAGE_TAG := $(BASE_IMAGE_TAG)-$(BASE_IMAGE_STABILITY_TAG)
endif

ifneq ($(HEAD_VER),)
# ifneq ($(TAG),latest)
    override TAG := $(TAG)-$(HEAD_VER)
# endif
endif


.PHONY: build buildx-build buildx-build-amd64 buildx-push test push shell run start stop logs clean release

default: build

build:
	docker build -t $(REPO):$(TAG) \
		./


test:
	cd ./tests && IMAGE=$(REPO):$(TAG) ./run.sh

push:
	docker push $(REPO):$(TAG)

run:
	docker run --rm --name $(NAME) $(PORTS) $(VOLUMES) $(ENV) $(REPO):$(TAG) $(CMD)

clean:
	-docker rm -f $(NAME)

release: build push
