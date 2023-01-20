<?php

 namespace App\Service\Status;


    interface IStatusServer
    {
        function getOnline($ip , $login_port , $game_port);
        function getCountUsers();
    }

?>