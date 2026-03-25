FROM ubuntu:22.04
RUN apt-get update && apt-get install -y apache2 php libapache2-mod-php
COPY . /var/www/html/
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN sed -i 's/80/8080/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf
EXPOSE 8080
CMD ["apache2ctl", "-D", "FOREGROUND"]
