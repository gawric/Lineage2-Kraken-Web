<?php

    namespace App\Service\Status\Support;

     class AvailabilityPort
     {
            protected $timeout;


            function __construct($x) {
                $this->timeout = $x;
            }


            function getOnline($ip , $login_port , $game_port){
                return $this->getStatus($ip , $login_port , $game_port);
           }

           function getStatus($ip , $login_port , $game_port){
               

                if ($ip and $login_port and $game_port and $this->timeout) {
                    //отключаем проверку gameserver
                    //не вижу смысла првоерять оба порта 2106 и 7777 если логин валяется гейм будет бесполезен!
                   // $game =  $this->getGameStatus($ip , $game_port);
                    $login =  $this->getLoginStatus($ip , $login_port);
                }


               return $this->getConvertStatus($login);
           }


           function getConvertStatus($login){
                return $login ? 'online' : 'offline';
           }
           function getGameStatus($ip , $game_port){
              return @fsockopen($ip, $game_port, $errno, $errstr, $this->timeout);
           }

           function getLoginStatus($ip , $login_port){
               return @fsockopen($ip, $login_port, $errno, $errstr, $this->timeout);
           }

    }
?>