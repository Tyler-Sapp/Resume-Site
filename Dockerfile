FROM php:8.1-apache
COPY public/ /var/www/html/
COPY src/ /var/www/html/src/
RUN docker-php-ext-install pdo_mysql   # if you ever need a DB
