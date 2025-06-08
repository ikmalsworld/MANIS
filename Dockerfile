FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application code
COPY . .

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set file ownership & permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage /var/www/bootstrap/cache

# Set environment
ENV APP_ENV=production

# Generate app key (only if .env is present and needed)
# You may comment this if you have your .env baked or provided externally
RUN cp .env.example .env && php artisan key:generate

EXPOSE 80

# Start Laravel (still using PHP's built-in server for simplicity)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
