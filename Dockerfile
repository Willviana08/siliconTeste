FROM php:8.1-apache

# Instalar extensões necessárias
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql zip

# Ativar mod_rewrite do Apache
RUN a2enmod rewrite

# Copiar arquivo de virtual host
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar arquivos do projeto
COPY . .

# Instalar dependências do Laravel
RUN composer install

# Dar permissões
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
