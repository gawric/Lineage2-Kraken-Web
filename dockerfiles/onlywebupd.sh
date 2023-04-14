#!/bin/bash
echo "Update Only Kraken Web Suite"
mv ./files_docker/laravel9/Lineage2-Kraken-Web/.env ./files_docker/.env
git clone https://github.com/gawric/Lineage2-Kraken-Web.git
rm -rf ./files_docker/laravel9/Lineage2-Kraken-Web
mv ./Lineage2-Kraken-Web ./files_docker/laravel9
mv ./files_docker/.env ./files_docker/laravel9/Lineage2-Kraken-Web/.env
echo "Update Kraken Web Suite ....done"