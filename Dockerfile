FROM php:8.1-apache

# Copia os arquivos para a pasta do Apache
COPY . /var/www/html/

# Habilita o mod_rewrite
RUN a2enmod rewrite

# Instala extensões necessárias
RUN docker-php-ext-install mysqli

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html