FROM debian:latest

RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql mariadb-server supervisor && \
    apt-get clean

ADD https://wordpress.org/latest.tar.gz /var/www/html/

# Распаковываем архив и удаляем его
RUN tar -xzf /var/www/html/latest.tar.gz -C /var/www/html/ --strip-components=1 && \
    rm /var/www/html/latest.tar.gz

# copy the configuration file for apache2 from files/ directory
COPY files/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY files/apache2/apache2.conf /etc/apache2/apache2.conf

# copy the configuration file for php from files/ directory
COPY files/php/php.ini /etc/php/8.2/apache2/php.ini

# copy the configuration file for mysql from files/ directory
COPY files/mariadb/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

# copy the supervisor configuration file
COPY files/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY files/wp-config.php /var/www/html/wp-config.php
RUN mkdir /var/run/mysqld && chown mysql:mysql /var/run/mysqld

EXPOSE 80

VOLUME /var/lib/mysql

VOLUME /var/log

CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

