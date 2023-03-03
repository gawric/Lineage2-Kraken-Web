<?php

namespace App\Service\Sheldure\Info\Support\SupportFunc;

use App\Models\CharactersStatic;
use Illuminate\Support\Collection;

    class SupportFunc
    {
     
        public function convertIdClanToNameClan($allModelCharacters ,  $result_clan){
            foreach($allModelCharacters as $model){
                $model->clan = $this->getClanName($result_clan , $model->clan);
                info($model); 
            }

        }

        public function createModel($resultArr){
            $temp = [];
            if(isset($resultArr)){
                foreach($resultArr as $valueArr){
                    array_push($temp , new CharactersStatic($valueArr));
                }
            }
           return $temp;
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