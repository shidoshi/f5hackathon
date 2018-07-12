FROM php:7.0-apache
COPY config/php.ini /usr/local/etc/php/
COPY html/ /var/www/html/
