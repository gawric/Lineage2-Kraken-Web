printenv > env.txt
cat /var/spool/crontabs/root >> env.txt
cat env.txt > /var/spool/cron/crontabs/root