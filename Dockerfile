FROM php:8.0-apache

# Install necessary system dependencies
RUN apt-get update && apt-get install -y libicu-dev git unzip

# Install PHP extensions
RUN docker-php-ext-install intl pdo_mysql

# Enable Apache mod_rewrite (important for CakePHP routing)
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the application code into the container
COPY . .

# Install Composer (CakePHP's dependency manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expose Apache port (80)
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
