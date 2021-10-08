FROM ubuntu:18.04
#FROM ubuntu:16.04

####################
# FROM OFFICIAL IMAGES
####################
# https://hub.docker.com/_/ubuntu
####################

ENV SUPERVISOR_LOG /var/log/supervisor

RUN apt-get update

# install supervisor
RUN apt-get install -y supervisor cron sudo

ENV TZ=UTC
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# php7.0-cli  \
# php7.0-common  \
# php7.0-json  \
# -php7.0-mcrypt  \
# php7.0-opcache  \
# php7.0-readline  \
RUN apt-get install -y \
    php7.2  \
    php7.2-bcmath  \
    php7.2-curl  \
    php7.2-gd  \
    php7.2-mbstring  \
    php7.2-mysql  \
    php7.2-xml  \
    php7.2-zip \
    php7.2-memcached \
    php7.2-amqp

# не нужно, оно уже автоматом ставится
#RUN ln -s /etc/php/7.2/mods-available/amqp.ini /etc/php/7.2/cli/conf.d/20-amqp.ini

#RUN apt-get install -y lua5.3 \
#    liblua5.3-dev \
#    && ln -s /usr/include/lua5.3/ /usr/include/lua \
#    && ln -s /usr/lib/x86_64-linux-gnu/liblua5.3.a /usr/lib/liblua.a \
#    && ln -s /usr/lib/x86_64-linux-gnu/liblua5.3.so /usr/lib/liblua.so \
#    && pecl install lua \
#    && docker-php-ext-enable lua

RUN apt-get clean

#RUN mkdir -p /var/log/supervisor

COPY supervisord.conf /etc/supervisor/supervisord.conf

#todo проверить www-data
# sudo -u www-data php script.php
RUN adduser shellme

# link to yii
VOLUME ["/var/www/html/"]
VOLUME ["/etc/supervisor/conf.d"]
VOLUME ["/var/log/supervisor"]

EXPOSE 9001

WORKDIR /var/www/html/

CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]
