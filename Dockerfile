FROM php:8.0-apache
WORKDIR /var/www/html
COPY . .
RUN docker-php-ext-install pdo_mysql
EXPOSE 9000
CMD ["php", "-S", "0.0.0.0:9000", "-t", "/var/www/html"]
