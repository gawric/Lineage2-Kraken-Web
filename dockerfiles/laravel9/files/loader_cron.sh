#!/bin/bash
echo "bitnami cronjob start"
#/opt/bitnami/php/bin/php /app/artisa cache:clear
 /opt/bitnami/php/bin/php  /app/artisan schedule:run
echo "bitnami cronjon end"
