FROM php:apache

# Installer les extensions nécessaires, y compris pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql

# Copier le contenu du répertoire local dans le conteneur
COPY . /var/www/html
