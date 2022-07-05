ARG BASE_IMAGE_TAG

FROM 991404956194.dkr.ecr.us-west-2.amazonaws.com/nrel-split-nginx:${BASE_IMAGE_TAG}

ENV NGINX_BACKEND_HOST="html" \
NGINX_VHOST_PRESET="html" \
NGINX_SERVER_ROOT="/var/www/html"

USER root

WORKDIR /var/www/html

# Copy everything from project root into html container's working dir
ADD . /var/www/html/

USER wodby
