<?php

 namespace App\Service\Info;


    interface IServerStats
    {
       function getDataPk($server_id);
       function getDataPvp($server_id);
    }

?>