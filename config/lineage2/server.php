<?php
  
return [
    //Статус сервера изменяется когда мы попытаемся поключиться к главной точке доступа "/"
    //В этот момент мы вычисляем, в сети сервер или нет. Количество подключенных пользователей на каждом сервере
    'list_server' => [
            'server1' => [
                'id'=>'1',
                'name'=>'X50 Nightmare',
                'ip'=>'127.0.0.1',
                'login_port'=>'2106',
                'game_port' =>'7777',
                'status' => 'offline',
                'count_online' => 0,
                'developer_id' => 0,
                'server_db_model' => "App\Models\Server\ServerCharacters",
                'accounts_db_model' => "App\Models\Server\ServerAccounts",
                'clandata_db_model' => "App\Models\Server\ServerClanData",
                'items_db_model' => "App\Models\Server\ServerItems",
        ],
            'server2' => [
                'id'=>'2',
                'name'=>'X300 Paradise',
                'ip'=>'127.0.0.1',
                'login_port'=>'2106',
                'game_port' =>'7777',
                'status' => 'offline',
                'count_online' => 0,
                //Применяется в ProxySqlServer > SelectServer
                //ID берем из списка > support_developers
                'developer_id' => 1,
                'server_db_model' => "App\Models\Server\PwSoft\PwSoftServerCharacters",
                'accounts_db_model' => "App\Models\Server\PwSoft\PwSoftServerAccounts",
                'clandata_db_model' => "App\Models\Server\PwSoft\PwSoftServerClanData",
                'items_db_model' => "App\Models\Server\PwSoft\PwSoftItems",
        ],
            'server3' => [
                'id'=>'3',
                'name'=>'X1000 Warland',
                'ip'=>'127.0.0.1',
                'login_port'=>'2106',
                'game_port' =>'7777',
                'status' => 'offline',
                'count_online' => 0,
                'developer_id' => 2,
                //server_db_model -> модель созданная для обращения к нужной бд и конкретной таблице пример (ServerCharacters model)
                //возможность использовать разные бд
                'server_db_model' => "App\Models\Server\Lucera\LuceraServerCharacters",
                //accounts_db_model -> в модели мы указываем не только имя таблицы но и какая бд будет использоваться
                'accounts_db_model' => "App\Models\Server\Lucera\LuceraServerAccounts",
                'clandata_db_model' => "App\Models\Server\Lucera\LuceraServerClanData",
                'items_db_model' => "App\Models\Server\Lucera\LuceraServerItems",
        ],
    ],

    //секунды
    'timeout_socket' => 5,
    
   

    //Количество строчек в статистике Топ Пк - Топ Пвп
    'top_count' => 5,

    //Количество строчек у админа в adminDashboard
    'top_count_dashboard' => 2,

    //Количество строчек у админа в adminPayments
    'top_count_payments' => 2,

    //Количество разрешенных аккаунтов на одной учетке 
    'allowed_accounts' => 10,

    //Блокировка пользователя если вход произошел с неизвестного ip
    'blocked_login_with_unknown_ip' => true,

     //название роли для юзера
    'role_name_user' => 'role_user',

    //название роли для админа
    'role_name_admin' => 'role_admin',

    //название роли для заблокированного пользователя
    'role_name_blocked' => 'role_blocked',

    //Для таблицы items в столбике loc
    'inventory_item' => 'INVENTORY',

     //при блокировке аккаунта админом мы вписываем этот access lvl
    'access_Level_block' => -1,

    //при разблокировке аккаунта админом мы вписываем этот access lvl
    'access_Level_unblock' => 0,

     //Order status
    'order_status_complete' => 'complete',

    'order_status_fail_add' => 'fail_add',

    'order_status_paid' => 'paid',

    'order_status_found' => 'found',
   
    
    //Какие платежные системы поддерживаем
    'support_paymonts' => [0 => "Enot.io"],

    //Путь к таблицам в нашей базе данных => paymonts_id это id номер из support_paymonts
    'support_paymonts_tables' => [0 => ["paymonts_id" => 0 , "paymonts_name" => "Enot.io" ,"paymont_db_model"=>"App\Models\OrderEnot"]],

    'support_paymonts_filters' =>  [0 => "По аккаунту" , 1 => "По имени чара" , 2 => "По сервису" , 3 => "По дате"],
    //список донатных вещей. Выдаем только их
    'coin_payments' =>['coin_of_luck' =>4037 , 'adena' =>57],

    'support_developers' => [0 => "App\Service\ProxySqlL2Server\RusAcisProxy\ProxyServerAcis", 1 => "App\Service\ProxySqlL2Server\PwSoftProxy\ProxyPwSoft" , 2 => "App\Service\ProxySqlL2Server\LuceraProxy\ProxyLucera"],
];