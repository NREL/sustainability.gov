FROM 991404956194.dkr.ecr.us-west-2.amazonaws.com/nrel-split-httpd:latest

RUN yum -y update ; yum clean all
RUN yum -y install git ; yum clean all

ADD . /var/www/html/
RUN rm /var/www/html/Dockerfile
