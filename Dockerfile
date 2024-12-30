FROM php:7.4-fpm

# Install system dependencies needed for PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    libicu-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

# Configure and install PHP extensions
RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl zip gd pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application code
COPY . .

# Install project dependencies
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Expose port 9000
EXPOSE 9000

# Set user and group to nobody:nogroup for security.
RUN groupadd -g 1000 nobody && useradd -u 1000 -g nobody -s /bin/false -m nobody
USER nobody

# Run php-fpm
CMD ["php-fpm"]
