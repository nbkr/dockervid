FROM centos:latest

RUN yum install -y httpd php
COPY quoteshow.php /var/www/html/index.php

RUN apachectl -DFOREGROUND
