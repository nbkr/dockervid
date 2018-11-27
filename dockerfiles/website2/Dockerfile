ROM ubuntu:latest

RUN apt-get -y update
RUN apt-get -y install apache2 php

COPY documentroot/ /var/www/html/

CMD rm -f /var/run/apache2.pid; apachectl -DFOREGROUND -k start
