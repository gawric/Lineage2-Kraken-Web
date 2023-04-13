### Общий принцип взаимодействия  Docker-контейнеров Kraken-Web
В основе мы используем 2 контейнера от `bitnami`
 `https://hub.docker.com/r/bitnami/laravel/` - laravel
 `https://hub.docker.com/r/bitnami/mysql` - mysql8

 Связь между ними мы используем через сеть докер.
 Выдаем ip адрес mysql 172.20.0.4
 Выдаем ip адрес laravel 172.20.0.5
 После старта mysql мы запускаем скрипт `/files/ini.sh` - в нем мы используем environment docker-compose и если нужно создаем нового юзера 
 для подключения laravel с основными разрешениями. 
 Создаем 3 базы данных так же указаных в docker-compose если они не указаны мы игнорируем создание.
 


### Описание процесса развертывания Docker-контейнеров Kraken-Web

Если вы зайдете на `https://github.com/gawric/Lineage2-Kraken-Web` репозиторий содержит папку
dockerfiles в ней лежат все файлы связанные с развертыванием docker-compose/
`laravel9` - Содержит Dockerfile для laravel9
`mysql8` - Так же есть Dockerfile и подпапка files c файлами `init.sh` и `start.sh` эти скрипты запускают после старта mysql в докер контейнере mysql8. Папка `sql` содержит схемы для создания баз данных rusacis/lucera/pwsoft копируются в docker контейнер mysql8
`docker-compose.yml` - прописываются общие настройки для двух контейнеров larave и mysql
`init.sh` - bash скрипт для создания структуры папок на удаленном сервере.



