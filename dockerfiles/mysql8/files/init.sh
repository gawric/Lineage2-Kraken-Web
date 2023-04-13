#!/bin/bash
mysql  -uroot -p11111111 -e "CREATE USER IF NOT EXISTS '$MYSQL_USER_LOGIN'@'$MYSQL_ACCESS_IP' IDENTIFIED BY '$MYSQL_USER_PASSWORD';GRANT ALL ON *.* TO '$MYSQL_USER_LOGIN'@'$MYSQL_ACCESS_IP';"




if [ -z ${MYSQL_DATABASE_OTHER1+x} ];
then
  echo "CHECK 1: variable 'MYSQL_DATABASE_OTHER1' is null ";
else
  mysql  -uroot -p11111111 -e "CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE_OTHER1;"
  rusacis=$(mysql -uroot -p11111111 -se "SELECT CASE COUNT(*) WHEN '0' THEN 'empty_rusacis' ELSE 'not empty_rusacis' END FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA='$MYSQL_DATABASE_OTHER1';")
  if [ "$rusacis" = "empty_rusacis" ]; then
    for sqlfile in $MYSQL_DATABASE_SHEMA1
  do
        echo Loading $sqlfile ...
        mysql -uroot -p11111111 -f -D $MYSQL_DATABASE_OTHER1 < $sqlfile
  done

  else
    echo "mysql: $MYSQL_DATABASE_OTHER1 db is not empty."
  fi
fi

if [ -z ${MYSQL_DATABASE_OTHER2+x} ];
then
  echo "CHECK 1: variable 'MYSQL_DATABASE_OTHER2' is null ";
else
  mysql  -uroot -p11111111 -e "CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE_OTHER2;"
  rusacis=$(mysql -uroot -p11111111 -se "SELECT CASE COUNT(*) WHEN '0' THEN 'empty_rusacis' ELSE 'not empty_rusacis' END FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA='$MYSQL_DATABASE_OTHER2';")
  if [ "$rusacis" = "empty_rusacis" ]; then
    for sqlfile in $MYSQL_DATABASE_SHEMA2
  do
        echo Loading $sqlfile ...
        mysql -uroot -p11111111 -f -D $MYSQL_DATABASE_OTHER2 < $sqlfile
  done

  else
    echo "mysql: $MYSQL_DATABASE_OTHER2 db is not empty."
  fi
fi


if [ -z ${MYSQL_DATABASE_OTHER3+x} ];
then
  echo "CHECK 1: variable 'MYSQL_DATABASE_OTHER3' is null ";
else
  mysql  -uroot -p11111111 -e "CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE_OTHER3;"
  rusacis=$(mysql -uroot -p11111111 -se "SELECT CASE COUNT(*) WHEN '0' THEN 'empty_rusacis' ELSE 'not empty_rusacis' END FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA='$MYSQL_DATABASE_OTHER3';")
  if [ "$rusacis" = "empty_rusacis" ]; then
    for sqlfile in $MYSQL_DATABASE_SHEMA3
  do
        echo Loading $sqlfile ...
        mysql -uroot -p11111111 -f -D $MYSQL_DATABASE_OTHER3 < $sqlfile
  done

  else
    echo "mysql: $MYSQL_DATABASE_OTHER3 db is not empty."
  fi
fi



echo "mysql: Running Create $MYSQL_USER_LOGIN  User And 4 Databases"


