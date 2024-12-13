# Stage 1: Build the application
FROM composer:2.7 AS builder

WORKDIR /app

# Copy seluruh kode aplikasi terlebih dahulu
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Stage 2: Set up the final image with PHP and web server
FROM php:8.2-fpm

# Install necessary packages for Laravel
RUN apt-get update && apt-get install -y \
    curl \
    libpq-dev \
    libzip-dev \
    unzip \
    zip \
    && docker-php-ext-install pdo_mysql zip

# Set working directory in the container
WORKDIR /var/www/html

# Copy the application files from the builder stage
COPY --from=builder /app /var/www/html

# Set permissions for storage and bootstrap cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/vendor

# Expose the application port (8080)
EXPOSE 8080

# Set environment variable for Laravel to run correctly
ENV APP_ENV=production

# Start the built-in PHP server to listen on port 8080
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/var/www/html/public"]
