FROM ubuntu

RUN apt-get update
RUN apt-get -y upgrade

# install PHP
RUN apt-get -y install php5-fpm php5-redis

# copy configs
COPY config/ /etc/php5/

CMD ["php5-fpm"]
