FROM php:7.4-apache

####################
# FROM OFFICIAL IMAGES
####################
# https://hub.docker.com/_/php
####################

####################
# меняем http root
# необходимо, так как у нас много хардкода в старой версии приложения
####################
ENV APACHE_DOCUMENT_ROOT /var/www/html/basic/web

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

#todo
#RUN chmod 755 /var/www/html/

#COPY php.ini /usr/local/etc/php/

# экспорт делаем рута, так как у нас сейчас всё в одной папке сформировано
VOLUME ["/var/www/html/"]
VOLUME ["/etc/cron.d/"]

EXPOSE 80

#RUN chown -hR www-data:www-data /var/www/html/
WORKDIR /var/www/html/

########################################
# Official Debian and Ubuntu images automatically run apt-get clean, so explicit invocation is not required.
########################################
# подготовка к установке
########################################
RUN apt-get update

########################################
# устанавливаем необходимые PHP расширения
########################################
RUN apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libonig-dev \
        zlib1g-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) bcmath json mysqli pdo pdo_mysql mbstring gd

########################################
# since php 7.2
########################################
#RUN apt-get install -y libmcrypt-dev \
#        pecl install mcrypt-1.0.2 \
#        docker-php-ext-enable mcrypt
########################################

########################################
# php amqp
########################################
RUN apt-get install -y librabbitmq4 librabbitmq-dev \
    && pecl install amqp \
    && docker-php-ext-enable amqp \
    && docker-php-ext-install sockets

########################################
# php memcached
########################################
RUN apt-get update && apt-get install -y libmemcached-dev zlib1g-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached
#RUN apt-get install -y git libmemcached-dev \
#      && git clone https://github.com/php-memcached-dev/php-memcached /usr/src/php/ext/memcached \
#      && cd /usr/src/php/ext/memcached && git checkout -b php7 origin/php7 \
#      && docker-php-ext-configure memcached \
#      && docker-php-ext-install memcached

########################################
# CRON ZIP UNZIP GIT
########################################
RUN apt-get update && apt-get install -y cron zip unzip git

########################################
# php redis
########################################
#RUN apt-get install -y wget \
#    && pecl install -o -f redis \
#    &&  rm -rf /tmp/pear \
#    &&  docker-php-ext-enable redis

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

#lua installation
RUN #apt-get install -y lua5.3 \
#    liblua5.3-dev \
#    && ln -s /usr/include/lua5.3/ /usr/include/lua \
#    && ln -s /usr/lib/x86_64-linux-gnu/liblua5.3.a /usr/lib/liblua.a \
#    && ln -s /usr/lib/x86_64-linux-gnu/liblua5.3.so /usr/lib/liblua.so \
#    && pecl install lua \
#    && docker-php-ext-enable lua



RUN apt-get clean

#enable RewriteEngine
RUN cp /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load

COPY init.sh /usr/local/bin/
CMD ["sh", "/usr/local/bin/init.sh"]

#доступ к статусу
COPY status.conf /etc/apache2/mods-available/


RUN apt install vlc -y

RUN apt install ffmpeg -y

# for onvif
RUN apt-get install -y libxml2-dev && docker-php-ext-install soap && docker-php-ext-enable soap
