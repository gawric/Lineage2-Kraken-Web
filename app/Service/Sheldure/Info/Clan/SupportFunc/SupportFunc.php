<?php

namespace App\Service\Sheldure\Info\Clan\SupportFunc;

use Config;
use Illuminate\Support\Collection;
use App\Models\ClanStatic;

    class SupportFunc
    {

        public function createModel($server_id , $resultArr , $arr_clan_data){
            $temp = [];
            if(isset($resultArr)){
                //info("Lets go");
                foreach($resultArr as $search_value){

                    $member = $search_value['count'];
                    $clan_item = $this->getItemByClanId($arr_clan_data ,$search_value);
                    $model = new ClanStatic();

                    if(count($clan_item) > 0){
                        $this->addData($model , $member , $server_id , $clan_item->first());
                        $this->pushArray($clan_item , $temp , $model);
                    }
                   
                }
            }
           return $temp;
        } 

        private function getItemByClanId($arr_clan_data ,$search_value){
           return $arr_clan_data->filter(function ($item) use ($search_value){
                if($item['clan_id'] == $search_value['clanid']){
                    return $item;
                }
            });
        }
        //['clan_id', 'clan_name','server_id' ,'clan_level', 'reputation_score' , 'hasCastle' , 'ally_id', 'ally_name', 'member'];
        private  function addData(&$model, $member , $server_id , $clan_item){
            $model->clan_id = $clan_item['clan_id'];
            $model->clan_name = $clan_item['clan_name'];
            $model->clan_level = $clan_item['clan_level'];
            $model->reputation_score = $clan_item['reputation_score'];
            $model->hasCastle = $clan_item['hasCastle'];
            $model->ally_id = $clan_item['ally_id'];
            $model->ally_name = $clan_item['ally_name'];
            $model->member = $member;
            $model->server_id = $server_id;
        }


        private function pushArray($clan_item , &$temp , $model){
            if(isset($model['clan_id'])){
                array_push($temp , $model);
            }
        }

    }

?>