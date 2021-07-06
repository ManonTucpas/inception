# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mlecuyer <mlecuyer@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/07/06 12:37:18 by mlecuyer          #+#    #+#              #
#    Updated: 2021/07/06 13:02:57 by mlecuyer         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#PATH=./srcs/docker-compose.yml

.PHONY: start stop

build:
	 cd srcs && docker-compose build && cd ..

up:
	cd srcs && docker-compose up -d && cd ..

down:
	cd srcs && docker-compose down && cd ..

stop:
	cd srcs && docker-compose stop && cd ..

prune:
	cd srcs && docker system prune && cd ..


stop_volumes:
				cd srcs && docker-compose down && cd ..
				docker system prune --volumes --all --force
				sudo rm -rf ~/data