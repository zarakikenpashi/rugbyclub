FROM php:8.2-fpm

# Installer les extensions nécessaires
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpq-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Créer le dossier de travail
WORKDIR /var/www

# Copier tout le projet dans l'image
COPY .env .env

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Donner les droits à Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Exécuter les migrations et lancer le serveur
CMD php artisan config:clear \
    && php artisan config:cache \
    && php artisan migrate --force \
    && php artisan serve --host=0.0.0.0 --port=8000