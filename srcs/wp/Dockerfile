# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mlecuyer <mlecuyer@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/06/16 20:40:50 by mlecuyer          #+#    #+#              #
#    Updated: 2021/06/30 17:58:25 by mlecuyer         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster


RUN apt-get update
RUN apt-get -y install wget

RUN apt-get install -y \
	php7.3 \
	php7.3-mysql \
	php7.3-fpm \
	php7.3-curl \
	php7.3-gd \
	php7.3-intl \
	php7.3-mbstring \
	php7.3-soap \
	php7.3-xml \
	php7.3-xmlrpc \
	php7.3-zip

 
COPY /conf/wp-config.php .   

# Create WP directory
RUN mkdir -p /var/www

# Install WP
RUN wget http://wordpress.org/latest.tar.gz
RUN tar -zvxf latest.tar.gz && rm latest.tar.gz
RUN mv wordpress html && mv html /var/www/

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

RUN mv wp-config.php /var/www/html/wp-config.php

RUN mkdir -p /run/php/
COPY ./conf/init.sh .


EXPOSE 9000

CMD ["bash","init.sh"]