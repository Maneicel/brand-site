FROM php:8.2-apache
COPY . /var/www/html/
RUN a2enmod rewrite && a2dismod mpm_event && a2enmod mpm_prefork
ENV PORT=80
EXPOSE 80
CMD ["apache2-foreground"]
