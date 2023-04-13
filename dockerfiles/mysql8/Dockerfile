#FROM docker.io/bitnami/mysql:8.0
FROM bitnami/mysql:8.0
LABEL maintainer="admin@hh-soft.ru"

### Change user to perform privileged actions
USER 0
### Install 'vim'
RUN install_packages vim
#COPY /files/start.sh /docker-entrypoint-initdb.d/
COPY /files/init.sh /docker-entrypoint-startdb.d/
RUN mkdir /temp_sql
#COPY /files/sql  /temp
### Revert to the original non-root user
USER 1001
#COPY /files/init.sh /docker-entrypoint-initdb.d/
#COPY /files/init.sh /docker-entrypoint-startdb.d/
#RUN mkdir /temp
COPY /files/sql  /temp_sql
