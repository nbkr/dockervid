FROM centos:latest

RUN yum install httpd php
COPY quoteshow.php /var/www/html/index.php

CMD apachectl -DFOREGROUND
