# Usar la imagen oficial de PHP con Apache
FROM php:7.4-apache

# Copiar los archivos PHP al directorio del servidor Apache
COPY info.php /var/www/html/info.php
COPY random.php /var/www/html/random.php

# Cambiar la propiedad y los permisos de los archivos
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Habilitar el módulo mod_rewrite (opcional)
RUN a2enmod rewrite

# Configuración adicional para Apache (permitir acceso a todo)
RUN echo '<Directory /var/www/html>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' >> /etc/apache2/apache2.conf

# Exponer el puerto 80
EXPOSE 80
