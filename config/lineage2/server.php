<?php
  
return [
    //Статус сервера изменяется когда мы попытаемся поключиться к главной точке доступа "/"
    //В этот момент мы вычисляем, в сети сервер или нет. Количество подключенных пользователей на каждом сервере
    //Пока не используем кэширование!
    'list_server' => [
            'server1' => [
                'id'=>'1',
                'name'=>'X50 Nightmare',
                'ip'=>'127.0.0.1',
                'login_port'=>'2106',
                'game_port' =>'7777',
                'status' => 'offline',
                'count_online' => 0
        ],
            'server2' => [
                'id'=>'2',
                'name'=>'X300 Paradise',
                'ip'=>'192.168.0.1',
                'login_port'=>'2106',
                'game_port' =>'7777',
                'status' => 'offline',
                'count_online' => 0,
        ],
            'server3' => [
                'id'=>'3',
                'name'=>'X1000 Warland',
                'ip'=>'127.0.0.1',
                'login_port'=>'2106',
                'game_port' =>'7777',
                'status' => 'offline',
                'count_online' => 0,
        ],
    ],

    'timeout_socket' => 5,
];