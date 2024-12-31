# Use a more recent PHP version with Apache
FROM php:7.4-apache

# Install system dependencies and enable PHP extensions
RUN apt-get update && apt-get install -y \
      libicu-dev \
      libpq-dev \
      default-mysql-client \  
      git \                     
      zip \
      unzip \
    && rm -rf /var/lib/apt/lists/* \  # Proper cleanup of apt cache \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-install \
      intl \
      mbstring \
      pdo_mysql \
      pdo_pgsql \
      pgsql \
      zip \
      opcache

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

# Set application folder as environment variable
ENV APP_HOME /var/www/html

# Change UID and GID of apache user to match the Docker user (useful for local file access)
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

# Change web_root to CakePHP /var/www/html/webroot folder
RUN sed -i -e "s/html/html\/webroot/g" /etc/apache2/sites-enabled/000-default.conf

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the application code into the container
COPY . $APP_HOME

# Install PHP dependencies via Composer
RUN composer install --no-interaction --optimize-autoloader

# Change ownership of the application files to www-data (Apache user)
RUN chown -R www-data:www-data $APP_HOME

# Expose port 80 (Apache)
EXPOSE 80

# Set Apache as the default process
CMD ["apache2-foreground"]
