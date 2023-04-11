#!/bin/bash
mysql  -uroot -p11111111 -e "CREATE USER IF NOT EXISTS 'gawric'@'172.20.0.5' IDENTIFIED BY 'jtgEuZ8udR7F';GRANT ALL ON *.* TO 'gawric'@'172.20.0.5';"
mysql  -uroot -p11111111 -e "CREATE DATABASE IF NOT EXISTS laravel;CREATE DATABASE IF NOT EXISTS rusacis;CREATE DATABASE IF NOT EXISTS lucera;CREATE DATABASE IF NOT EXISTS pwsoft; "

echo "Running Create Gawric User And 4 Databases"
