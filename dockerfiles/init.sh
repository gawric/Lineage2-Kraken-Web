#!/bin/bash
echo "Init Kraken Web to Linux"
git clone https://github.com/gawric/Lineage2-Kraken-Web.git 
mkdir mysql_data
mkdir ./files_docker
mkdir ./files_docker/mysql8
mkdir ./files_docker/laravel9
touch ./files_docker/mysql8/Dockerfile
touch ./files_docker/laravel9/Dockerfile
rm -rf ./files_docker/laravel9/Lineage2-Kraken-Web
mv ./Lineage2-Kraken-Web ./files_docker/laravel9
mv ./files_docker/laravel9//Lineage2-Kraken-Web/.env.example ./files_docker/laravel9//Lineage2-Kraken-Web/.env
