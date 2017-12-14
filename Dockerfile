FROM 407445147104.dkr.ecr.us-west-2.amazonaws.com/base-httpd:6

RUN yum -y update ; yum clean all
RUN yum -y install git ; yum clean all

ADD . /var/www/html/
RUN rm /var/www/html/Dockerfile
