<?php

namespace App\Service\Sheldure\Info\Characters\Support\SupportFunc;

use Config;
use App\Service\Status\StatusServer;
use App\Service\Status\Support\SupportFuncStatus;
use App\Models\InfoServer;
use App\Models\CharactersStatic;
use App\Service\Sheldure\ISheldure;
use App\Service\Sheldure\Info\Characters\Support\SqlFilter\ClanDataByIdFilter;
use App\Models\Server\ServerCharacters;
use App\Models\Server\ServerClanData;
use Illuminate\Support\Collection;


    class SupportFunc
    {
   
     
        public function convertIdClanToNameClan($allModelCharacters ,  $result_clan){
            foreach($allModelCharacters as $model){
                $model->clan = $this->getClanName($result_clan , $model->clan);
                //info($model); 
            }

        }

        public function createModel($server_id , $resultArr , $listClassId){
            $temp = [];
            if(isset($resultArr)){
                foreach($resultArr as $valueArr){
                    $model = new CharactersStatic();
                    $this->add($model , $valueArr , $server_id , $listClassId);
                    array_push($temp , $model);
                }
            }
           return $temp;
        } 

        public  function add($model , $arr_data , $server_id , $listClassId){
            $model->obj_id = $arr_data['obj_id'];
            $model->server_id = $server_id;
            $model->name = $arr_data['char_name'];
            $model->class = $model->ConvertClassIdToName($arr_data['classid'] , $listClassId);
            $model->clan = $arr_data['clanid'];
            $model->lvl = $arr_data['level'];
            $model->pvp = $arr_data['pvpkills'];
            $model->pk = $arr_data['pkkills'];
            $model->onlinetime = $arr_data['onlinetime'];
            $model->online = $arr_data['online'];
        }


        public function getClanName($result_clan , $model_clan_id){
                if(isset($result_clan)){
                    return $this->searchId($result_clan , $model_clan_id);
                }
                return "Non";
        }

        public function searchId($result_clan , $model_clan_id){

            $name = "Non";
            foreach($result_clan as $currentClanId){

                $clan_id_server = (int) $currentClanId['clan_id'];

                if(!is_null($model_clan_id)){
                    if($clan_id_server == $model_clan_id){
                        $name = $currentClanId['clan_name'];
                    }
                }
      
            }
           return $name;
        }

    }

?>