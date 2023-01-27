<?php

 namespace App\Service\Status;


    interface IStatusServer
    {
        function getOnline($ip , $login_port , $game_port);
        function getCountUsers($modeldbName);
        function saveInfoServer($server_id , $status , $online);
        function saveAllInfoServer($listinfoserver);
        function getAllInfoServer();
        function delAllInfoServer();
    }

?>