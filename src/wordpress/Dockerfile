FROM debian:buster
RUN apt-get update && apt-get install php7.3-fpm php7.3-gd php7.3-mysql php7.3-curl php7.3-imap php7.3-mbstring php7.3-xml mariadb-client wget -y
RUN mkdir var && cd var && mkdir www && cd www & mkdir html
RUN mkdir /var/run/php
RUN apt install --reinstall php-fpm
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz
COPY ./requirement/wp-config.php wp-config.php
RUN mv wp-config.php ./wordpress
COPY ./requirement/www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY ./requirement/script.sh ./script.sh
EXPOSE 9000
RUN service php7.3-fpm restart 
CMD ["bash", "script.sh"]
