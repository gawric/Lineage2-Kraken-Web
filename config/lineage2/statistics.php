<?php
  
return [

    //Сбор статистики откл/вкл
    //Может замедлять работу вашего сайта при большом количестве посетителей
    'collection_of_statistics' => true,
    'status_registration' => "User registration",
    'status_registration_account' => "User registration account server ",
    'status_change_pass_account' => "Account server change password  ",
    
    
    'status_auth_user' => "User auth Middleware success request",
    'status_auth_admin' => "Admin auth Middleware request",
    'status_auth__fail_user' => "User auth Middleware fail request ",
    'status_auth__fail_admin' => "Admin auth Middleware fail request",

    'status_user_blocked_ip' => "User blocked access to ip",

    'use_unknown_user' => 999999,
    'status_auth_unknown_user' => "User auth fail unknown account",

    //все таблицы будут очищены когда достигнут этого количества записей
    'number_to_clear_tables' => 1000,

    //Количество строк в таблицах статистики
    'top_statistics' => 2,
    
];