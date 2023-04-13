### Общий принцип взаимодействия  Docker-контейнеров Kraken-Web
В основе мы используем 2 контейнера от `bitnami`
 ##### laravel - [laravel](https://hub.docker.com/r/bitnami/laravel/)
 ##### mysql8 - [mysql8](https://hub.docker.com/r/bitnami/mysql)

 Связь между контейнерами мы используем через сеть docker.  
 Выдаем ip адрес mysql 172.20.0.4  
 Выдаем ip адрес laravel 172.20.0.5  

 Схема запроса: `inet-->docker laravel(port 8000)<---Docker mysql(доступ наружу закрыт)`
 


### Описание файлов развертывания Docker-контейнеров Kraken-Web

Если вы зайдете на `https://github.com/gawric/Lineage2-Kraken-Web` репозиторий содержит папку
dockerfiles в ней лежат все файлы связанные с развертыванием docker-compose.  
`laravel9` - Содержит Dockerfile для laravel9  
`mysql8` - Так же есть Dockerfile и подпапка files c файлами `init.sh` и `start.sh` эти скрипты запускаются после старта mysql в докер контейнере mysql8. Папка `sql` содержит схемы для создания баз данных rusacis/lucera/pwsoft копируются в docker контейнер mysql8  
`docker-compose.yml` - прописываются общие настройки для двух контейнеров laravel и mysql  
`init.sh` - bash скрипт для создания структуры папок на удаленном сервере.    
`dockerfiles/mysql8/files/init.sh` - bash скрипт в нем создается учетка для laravel docer и основные базы данных laravel/rusacis/lucera/pwsoft. Запускаются схемы для базе данных lucera/pwsoft/rusacis файл миграции laravel запускается в контейнере laravel.

### Запуск Docker-контейнеров Kraken-Web
1. Подключаемся по ssh к своему северу у меня это `Ubuntu 22.04`  
2. Создаем папку docker ![ssh!](https://i.ibb.co/7Ngy24D/1.png)  
