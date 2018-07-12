#!/bin/bash

#docker run -d -p 80:80 --name doraemon -v "$PWD":/var/www/html php:7.0-apachudo docker build -t doraemon .
sudo docker kill doraemon-run
sudo docker rm doraemon-run
sudo docker build -t doraemon .
sudo docker run -d -p 192.241.206.243:8080:80 --name doraemon-run doraemon
