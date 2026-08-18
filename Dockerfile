# --- Stage 1: Build Assets with Node ---
FROM node:20-alpine AS node-builder
WORKDIR /app

# Install Node dependencies
COPY package*.json ./
RUN npm install

# Copy application files and compile Vite assets
COPY . .
RUN npm run build

# --- Stage 2: Production PHP Web Server ---
FROM php:8.3-apache

# Install required system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    zip \
    && rm -rf /var/lib/apt/lists/*

# Configure and install PHP extensions needed for Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql bcmath zip opcache

# Enable Apache mod_rewrite for Laravel routing (.htaccess support)
RUN a2enmod rewrite

# Change Apache DocumentRoot to point to Laravel's public directory
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Configure Apache to listen on Render's dynamic PORT variable
RUN sed -i 's/Listen 80/Listen ${PORT}/g' /etc/apache2/ports.conf
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/g' /etc/apache2/sites-available/000-default.conf

# Set default environment variables
ENV PORT=80
ENV APP_ENV=production
ENV APP_DEBUG=false

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set workspace directory
WORKDIR /var/www/html

# Copy all application files
COPY . .

# Copy built frontend assets from the node-builder stage
COPY --from=node-builder /app/public/build ./public/build

# Install PHP packages for production (skip development dependencies and scripts)
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# Create SQLite database file if it doesn't exist and set proper owner/permissions
RUN mkdir -p database && touch database/database.sqlite
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/database

# Copy and set execution permissions for the entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Expose port (Render ignores EXPOSE but it serves as documentation)
EXPOSE 80

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
