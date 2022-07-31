FROM php:8.1-apache

COPY ./ /var/www/html
WORKDIR /var/www/html

RUN a2enmod rewrite

ADD ./apache.conf /etc/apache2/sites-enabled/000-default.conf

RUN docker-php-ext-install pdo pdo_mysql
