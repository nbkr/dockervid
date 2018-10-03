#! /bin/bash

rm -r /var/run/httpd/httpd.pid

exec apachectl -DFOREGROUND
