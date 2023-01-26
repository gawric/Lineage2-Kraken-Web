<?php

 namespace App\Service\Status\Support;
 use App\Models\InfoServer;

     class InfoServerSql
     {
    
        function saveInfoServer($server_id , $status , $online){
            $date_time = now();
            $this->saveModel($server_id , $status , $online , $date_time);
        }

        function getAllInfoServer(){
            
        }
        function delAllInfoServer(){
            (new InfoServer)->newQuery()->delete();
        }

        function saveAllInfoServer($listinfoserver){
            $this->workArr($listinfoserver);
        }

        function saveListModel(){
    
        }
        function saveModel($server_id , $status , $online , $last_update_at){

            $infoserver = new InfoServer;
            $infoserver->server_id = $server_id;
            $infoserver->status = $status;
            $infoserver->online = $online;
            $infoserver->last_update_at = $last_update_at;
    
            $infoserver->save();
        }

        function saveAll(&$item, $key)
        {
            $id = $item["id"];
            $status = $item["status"];
            $online = $item["count_online"];
            $date_time = now();
            $this->saveModel($id , $status , $online , $date_time);
        }

        function workArr($list_server){
            array_walk($list_server, "self::saveAll");
        }
    


     }
?>