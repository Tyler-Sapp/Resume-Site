FROM php:8.1-apache
# 1) Copy vendor (PHPMailer)
COPY vendor/ /var/www/html/vendor/

# 2) Copy application code
COPY public/ /var/www/html/
COPY src/    /var/www/html/src/

EXPOSE 80
CMD ["apache2-foreground"]
COPY public/ /var/www/html/
COPY src/ /var/www/html/src/
RUN docker-php-ext-install pdo_mysql   # if you ever need a DB
