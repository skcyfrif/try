# Use a more recent PHP version with Apache
FROM php:7.4-apache

# Install system dependencies and enable PHP extensions
RUN apt-get update && apt-get install -y \
      libicu-dev \
      libpq-dev \
      default-mysql-client \  
      zip \
      unzip \
      libpng-dev \  
      libjpeg62-turbo-dev \  
      libfreetype6-dev \  \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
      gd \
      intl \
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

# Copy the application code into the container (ensure you are in the correct directory)
COPY . $APP_HOME

# Ensure composer.json is copied correctly
RUN ls -la $APP_HOME

# Install PHP dependencies via Composer
RUN cd $APP_HOME && composer install --no-interaction --optimize-autoloader

# Change ownership of the application files to www-data (Apache user)
RUN chown -R www-data:www-data $APP_HOME

# Expose port 80 (Apache)
EXPOSE 80

# Set Apache as the default process
CMD ["apache2-foreground"]
