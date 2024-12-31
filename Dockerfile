# Use the PHP Apache image with version 7.1.5
FROM php:7.1.5-apache

# Install necessary system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
      libicu-dev \
      libpq-dev \
      libmcrypt-dev \
      mysql-client \
      git \
      zip \
      unzip \
    && rm -r /var/lib/apt/lists/* \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-install \
      intl \
      mbstring \
      mcrypt \
      pcntl \
      pdo_mysql \
      pdo_pgsql \
      pgsql \
      zip \
      opcache

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

# Set application folder environment variable
ENV APP_HOME /var/www/html

# Adjust Apache user and group to avoid permission issues
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

# Update Apache document root to CakePHP's webroot
RUN sed -i -e "s/html/html\/webroot/g" /etc/apache2/sites-enabled/000-default.conf

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy source code into the container
COPY . $APP_HOME

# Install PHP dependencies with Composer
RUN composer install --no-interaction

# Change ownership of the application folder to Apache user
RUN chown -R www-data:www-data $APP_HOME

# Expose port 80 to the host machine
EXPOSE 80

# Run Apache in the foreground
CMD ["apache2-foreground"]
