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
![git_clone!](https://i.ibb.co/XtJB9XJ/2.png)  
10. Запускаем `docker-compose build` создает 2 контейнера 
![docker-compose build!](https://i.ibb.co/FW0wxhC/3.png)  

11. Откроем для ознакомления настройки  `vi docker-compose.yml`. Здесь можно поменять логин и пароль к базе, юзера, ип подключения и много чего еще
12. Закрываем настройки `:q!`
13. Запускаем  наши контейнеры `docker-compose up`   
Первый запуск будет сопровождаться длительным процессом создания схем баз данных,mysql юзеров для нашего docker laravel.
14. Завершится должно примерно вот так   
![docker-compose up!](https://i.ibb.co/W5htZPG/4.png)  
15. Останавливаем запущенные контейнеры `ctr+c`  
16. Снова запускаем контейнеры с ключом -d `docker-compose up -d` что-бы запускались на фоне.
17. Вводим `docker ps`
18. Получаем что-то вроде   
![docker ps!](https://i.ibb.co/2NMyR7W/5.png)
19. `docker  exec e3bdcffc221c  php artisan migrate`. Где  e3bdcffc221c это контейнер id моего laravel
![php artisan migrate!](https://i.ibb.co/hV2xT8L/6.png)
20. Контейнеры уже запущены. Открываем браузер и переходим: у меня это `http://45.12.236.179:8000` где 45.12.236.179 ваш ip сервера

P/s Для запуска сайта `docker-compose up`, для остановки `docker-compose stop`, для обновления файлов `docker-compose build`.


