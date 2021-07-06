# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mlecuyer <mlecuyer@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/06/16 19:06:52 by mlecuyer          #+#    #+#              #
#    Updated: 2021/07/06 14:17:56 by mlecuyer         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN		apt-get update \
		&& apt-get install -y \
		nginx \
        openssl
    

# Copy the config files
RUN rm /etc/nginx/nginx.conf
COPY ./conf/nginx.conf /etc/nginx/nginx.conf

RUN  chmod 755 /var/www

#Create a directory for ssl
RUN mkdir /etc/nginx/ssl

# SSL Certificate Setting
RUN openssl req -x509 -nodes -days 365 -subj "/CN=mlecuyer" -newkey rsa:2048 -keyout /etc/ssl/nginx-mykey.key -out /etc/ssl/nginx-mycert.crt;
     
EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]