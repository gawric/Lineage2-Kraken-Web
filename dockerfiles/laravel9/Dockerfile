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
RUN crontab -l | { cat; echo "* * * * * cd /app && php artisan schedule:run"; } | crontab -
CMD cron

#SHELL ["/bin/bash", "-c"]
