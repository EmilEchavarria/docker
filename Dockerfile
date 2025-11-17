FROM php:8.2-apache

# Instalar extensiones necesarias de PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar todos los archivos del proyecto a Apache
COPY ./src /var/www/html

# Otorgar permisos correctos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto
EXPOSE 80
