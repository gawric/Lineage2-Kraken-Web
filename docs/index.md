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
1. Снимаем в аренду сервер у меня к примеру `Ubuntu 22.04`
2. Подключаемся к ssh сервера  
3. Создаем папку docker ![ssh!](https://i.ibb.co/7Ngy24D/1.png)  
4. Устанавливаем docker и docker compose [docker](https://www.theserverside.com/blog/Coffee-Talk-Java-News-Stories-and-Opinions/How-to-install-Docker-and-docker-compose-on-Ubuntu)
5. Устанавливаем git client
6. Находясь в папке /docker запускаем `git clone https://github.com/gawric/Lineage2-Kraken-Web.git`
7. Выполняем `mv ./Lineage2-Kraken-Web/dockerfiles/init.sh ./` Вытаскиваем файл Lineage2-Kraken-Web/dockerfiles/init.sh - наш файл для создания папок
8. Скачанный Lineage2-Kraken-Web можно удалить `rm -rf Lineage2-Kraken-Web`
9. Запускаем скачанный файл и создаем файлы  и папки `bash init.sh`
[git_clone!](https://i.ibb.co/XtJB9XJ/2.png)  
