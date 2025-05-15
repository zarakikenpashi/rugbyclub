# Étape 1: Image officielle PHP avec extensions
FROM php:8.2-fpm

# Installer les extensions et dépendances nécessaires
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpq-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier les fichiers Laravel
WORKDIR /var/www
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Droits d'accès
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Port Laravel
EXPOSE 8000

# Commande de démarrage
CMD php artisan serve --host=0.0.0.0 --port=8000
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000