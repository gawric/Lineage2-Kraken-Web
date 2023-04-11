#!/bin/bash
echo "Init Kraken Web to Linux"
git clone https://github.com/gawric/Lineage2-Kraken-Web.git
mkdir mysql_data
mkdir ./files_docker
mkdir ./files_docker/mysql8
mkdir ./files_docker/laravel9
touch ./files_docker/mysql8/Dockerfile
touch ./files_docker/laravel9/Dockerfile
mv ./Lineage2-Kraken-Web/dockerfiles/laravel9/Dockerfile ./files_docker/laravel9/Dockerfile
mv ./Lineage2-Kraken-Web/dockerfiles/mysql8/Dockerfile ./files_docker/mysql8/Dockerfile
mv ./Lineage2-Kraken-Web/dockerfiles/docker-compose.yml ./docker-compose.yml
rm -rf ./files_docker/laravel9/Lineage2-Kraken-Web
mv ./Lineage2-Kraken-Web ./files_docker/laravel9
mv ./files_docker/laravel9//Lineage2-Kraken-Web/.env.example ./files_docker/laravel9//Lineage2-Kraken-Web/.env
