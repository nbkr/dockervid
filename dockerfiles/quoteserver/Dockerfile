FROM centos:latest

RUN yum install httpd php
COPY quoter.php /var/www/html/index.php

CMD apachectl -DFOREGROUND
