<?php

    namespace App\Service\Status\Support\HttpModel;

    use App\Models\InfoServer;

     class CreatingFinalModel
     {
        public  function getDataInfo($list_server){
            $finishlist = [];
                if(isset($list_server) and count($list_server) >0){
                    return $this->pushArray($finishlist , $list_server);
                }
            return $finishlist;
        }
    
        private function pushArray(&$finishlist , $list_server){
            foreach (InfoServer::all() as $info) {
                $server_info = $this->createModel($list_server , $info);
                array_push($finishlist, $server_info);
            }
            return $finishlist;
        }
    
        private function createModel($list_server , $info){
            $servernamearr = $this->getNameByServerId($list_server , $info['server_id']);
            $server_name = $this->getNameArr($servernamearr);
    
             return  $this->createHttpInfoModel($info['id'] , 
                $server_name , 
                $info['server_id'] , 
                $info['status']  ,
                $info['online']  ,
                $info['last_update_at']  ,
                $info['updated_at'] , 
                $info['created_at']);
        }
    
        private function getNameByServerId($list_server , $server_id){
           return array_filter($list_server,function($v) use ($server_id) {
                if($v['id'] == $server_id){
                    return $v['name'];
                }
              });
           
        }
    
        private function getNameArr($arr){
            if(count($arr) > 0){
                $firstKey = array_key_first($arr);
                return $arr[$firstKey]['name'];
            }
    
            return "";
        }
    
        private function createHttpInfoModel($id , $name , $server_id , $status , $online , $last_update_at , $updated_at , $created_at){
            return [
                'id'=> $id,
                'name'=> $name,
                'server_id'=> $server_id,
                'status'=> $status,
                'count_online' => $online,
                'last_update_at' => $last_update_at,
                'updated_at' => $updated_at,
                'created_at' => $updated_at
            ];
        }
     }
?>