# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mlecuyer <mlecuyer@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/06/18 14:15:26 by mlecuyer          #+#    #+#              #
#    Updated: 2021/07/06 14:18:27 by mlecuyer         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN		apt-get update \
		&& apt-get install -y\
		wget \
		mariadb-server \
		gettext-base \
		mariadb-client \
		bash \
		vim

# change bind-address to 0.0.0.0 for listening on all ip
RUN rm /etc/mysql/my.cnf && echo "[mysqld]\ngeneral_log=1\nuser=root\nport=3306\nbind=0.0.0.0\nskip-networking=false" > /etc/mysql/my.cnf

COPY ./conf/init_mysql.sh /tmp/

RUN chmod 755 /tmp/init_mysql.sh

RUN chown -R mysql:mysql /var/lib/mysql

EXPOSE	3306

ENTRYPOINT ["./tmp/init_mysql.sh"]


