FROM php:7.4-fpm

# Install system dependencies for PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl zip

# Install other PHP extensions you might need (e.g. GD, PDO)
RUN docker-php-ext-install gd pdo_mysql

# Install Composer (already in your Dockerfile)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy your application files
WORKDIR /var/www/html
COPY . /var/www/html

# Run Composer Install
RUN composer install

# Expose port 9000
EXPOSE 9000

CMD ["php-fpm"]
