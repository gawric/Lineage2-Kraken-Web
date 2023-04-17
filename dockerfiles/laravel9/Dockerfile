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
COPY /files/my_laravel_docker_crontab /etc/cron.d/my_laravel_docker_crontab
COPY /files/preload.sh /app
COPY /files/loader_cron.sh /app
# Update the crontab file permission
RUN chmod 0644 /etc/cron.d/my_laravel_docker_crontab
RUN chmod +x  /app/preload.sh
RUN chmod +x  /app/loader_cron.sh
# Specify crontab file for running
RUN crontab -u bitnami  /etc/cron.d/my_laravel_docker_crontab
RUN touch /app/cron.log

SHELL ["/bin/bash", "-c"]
