<?php

    namespace App\Service\Status\Support;
    use App\Service\Status\StatusServer;

     class SupportFuncStatus
     {
        protected StatusServer $ss;


        function __construct($x) {
            $this->ss = $x;
        }


        function getStatusServersFunct($list_server){
            array_walk($list_server, "self::getStatus");
            return $list_server;
        }
    
        function getStatus(&$item, $key)
        {
                
                $ip = $item["ip"];
                $login_port = $item["login_port"];
                $game_port = $item["game_port"];
                $server_db_model = $item["server_db_model"];
                $data = $this->getData($ip , $login_port , $game_port);
                $count_online = $this->ss->getCountUsers($server_db_model);
                $this->replaceData($item , $data);
                $this->replaceDataCount($item , $count_online);
        }
    
        function replaceData(&$item , $data){
            $item["status"] = $data;
        }
        function replaceDataCount(&$item , $count_online){
            $item["count_online"] = $count_online;
        }
    
        function getData($ip , $login_port , $game_port){
            return $this->ss->getOnline($ip , $login_port , $game_port);
        }

     }
?>