FROM docker.io/bitnami/laravel:10
LABEL maintainer="admin@hh-soft.ru"
ADD /Lineage2-Kraken-Web /app
RUN ["apt-get" , "update"]
RUN ["apt-get" , "install" , "-y" , "vim"]
RUN ["composer" , "install"]
RUN ["apt-get" , "install" , "-y" , "iputils-ping"]
SHELL ["/bin/bash", "-c"]