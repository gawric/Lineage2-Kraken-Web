FROM docker.io/bitnami/laravel:10
LABEL maintainer="admin@hh-soft.ru"
ADD /Lineage2-Kraken-Web /app
RUN ["apt-get" , "update"]
RUN ["apt-get" , "install" , "-y" , "vim"]
RUN ["composer" , "install"]
RUN ["apt-get" , "install" , "-y" , "iputils-ping"]
RUN ["apt-get", "install","-y", "default-mysql-client"]
RUN ["php" , "artisan" , "key:generate"]
RUN ["npm" ,"install"]
RUN ["npm" , "run" , "build"]
RUN ["apt-get" , "install" ,"-y", "cron"]
# Add docker custom crontab
ADD /files/my_laravel_docker_crontab /etc/cron.d/my_laravel_docker_crontab
ADD /files/preload.sh /app
ADD /files/loader_cron.sh /app
# Update the crontab file permission
RUN chmod 0644 /etc/cron.d/my_laravel_docker_crontab

# Specify crontab file for running
RUN crontab /etc/cron.d/my_laravel_docker_crontab

SHELL ["/bin/bash", "-c"]
