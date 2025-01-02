# Use the PHP image as base
FROM php:8.1-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Install other necessary extensions and Composer
RUN apt-get install -y libzip-dev && docker-php-ext-install zip

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the application files
COPY ./www/composer.json ./www/composer.lock /var/www/html/

# Install PHP dependencies using Composer
RUN composer install --no-interaction --optimize-autoloader
