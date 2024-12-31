FROM php:7.4-apache

# Install necessary system dependencies, including libicu-dev which is required by intl
RUN apt-get update && apt-get install -y \
    libicu-dev \
    git \
    unzip \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install \
    intl \
    pdo_mysql \
    && docker-php-ext-enable intl

# Enable Apache mod_rewrite (important for CakePHP routing)
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the application code into the container
COPY . .

# Install Composer (CakePHP's dependency manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Composer dependencies (optional, if you want to install PHP dependencies directly from the container)
RUN composer install --no-interaction --optimize-autoloader

# Expose Apache port (80)
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
