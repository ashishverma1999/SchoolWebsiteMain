#!/bin/sh
set -e

# Clear existing cache files to prevent configuration mismatch
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true
php artisan cache:clear || true

# Rebuild configuration, routes, and view caches for optimal production speed
echo "Caching Laravel configuration, routes, and views..."
php artisan package:discover --ansi || true
php artisan config:cache
php artisan route:cache
php artisan view:cache

# If using SQLite database, make sure database file exists and is writeable
if [ "$DB_CONNECTION" = "sqlite" ]; then
    # Default SQLite path if not specified
    DB_PATH=${DB_DATABASE:-/var/www/html/database/database.sqlite}
    echo "Using SQLite database at $DB_PATH"
    
    mkdir -p "$(dirname "$DB_PATH")"
    if [ ! -f "$DB_PATH" ]; then
        touch "$DB_PATH"
        echo "Created SQLite database file."
    fi
    
    # Ensure correct permissions
    chmod -R 775 "$(dirname "$DB_PATH")" || true
    chown -R www-data:www-data "$(dirname "$DB_PATH")" || true
fi

# Run migrations if RUN_MIGRATIONS is set to true
if [ "$RUN_MIGRATIONS" = "true" ]; then
    echo "Running database migrations..."
    php artisan migrate --force
fi

# Execute the main container command (configured as apache2-foreground)
echo "Starting Apache Web Server..."
exec "$@"
