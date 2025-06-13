FROM php:8.2-fpm

# Install system dependencies and Xdebug
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=coverage" > /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=no" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.discover_client_host=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.output_dir=/tmp" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application code
COPY . .

# Copy your production environment file as .env
COPY .env.production .env

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set file ownership & permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage /var/www/bootstrap/cache

# Set environment variable
ENV APP_ENV=production

EXPOSE 80

# Start Laravel's built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
