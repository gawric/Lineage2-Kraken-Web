<?php

 namespace App\Service\Info;


    interface IServerStats
    {
       function getAllData($server_id , $top_count);
    }

?>