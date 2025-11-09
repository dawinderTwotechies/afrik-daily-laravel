#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "Installing npm packages and building assets..."
npm install --force
npm run build

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache
php artisan config:clear
php artisan route:clear
php artisan view:clear  
php artisan optimize:clear

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force