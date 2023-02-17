<?php

namespace App\Service\Sheldure\Info\Support;

use Config;
use App\Service\Status\StatusServer;
use App\Service\Status\Support\SupportFuncStatus;
use App\Models\InfoServer;
use App\Models\CharactersStatic;
use App\Service\Sheldure\ISheldure;
use App\Service\ProxyFilters\GeneralFilters;
use App\Service\Sheldure\Info\Support\SqlFilter\ClanDataByIdFilter;
use App\Models\Server\ServerCharacters;
use App\Models\Server\ServerClanData;
use Illuminate\Support\Collection;
use App\Service\Sheldure\Info\Support\SupportFunc\SupportFunc;
use Illuminate\Support\Facades\DB;

    class CalcCharacters
    {
        private $support;
        private $listclassid;

        public function __construct() {
            $this->support = new SupportFunc();
            $this->listclassid = Config::get('lineage2.class_id.list_class_id');
        }
     
        public function run($current_servers){
            

            $current_server_characters = $current_servers['server_db_model'];
            $current_clandata_db_model = $current_servers['clandata_db_model'];
            //ID определяется в конфиге
            $current_server_id = $current_servers['id'];

            info("Запуск планировщика задач! SheldureServers->calcStaticCharacters  $current_server_id ");

            $resultArrPk = $this->getPkServerCharacters($current_server_characters);
            $resultArrPvp = $this->getPvpServerCharacters($current_server_characters);

            $allModelCharactersPk = $this->convertCharactersToModel($current_server_id , $resultArrPk);
            $allModelCharactersPvp = $this->convertCharactersToModel($current_server_id , $resultArrPvp);

            $unique_clan_id_pk = $this->getAllUniqueClanid($resultArrPk);
            $unique_clan_id_pvp = $this->getAllUniqueClanid($resultArrPvp);

            $result_clan_pk = $this->getClanIdToClanName($unique_clan_id_pk , $current_clandata_db_model);
            $result_clan_pvp = $this->getClanIdToClanName($unique_clan_id_pvp , $current_clandata_db_model);

 
            $this->convertAllIdClanToName($allModelCharactersPk , $allModelCharactersPvp ,  $result_clan_pk , $result_clan_pvp);
            $this->saveAll($allModelCharactersPvp , $allModelCharactersPk);
     
            info("Завершение планировщика задач! SheldureServers->calcStaticCharacters для сервера:  $current_server_id   ");

        }



        private function getPkServerCharacters($current_server_characters){
            $filtersPk = new GeneralFilters(['toppkfilter'] , [['pkkills', '>', 0] , ['accesslevel', '=', 0]]);
            return $current_server_characters::filter($filtersPk)->get(['obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']);
        }

        private function getPvpServerCharacters($current_server_characters){
            $filtersPvp = new GeneralFilters(['toppvpfilter'] , [['pvpkills', '>', 0] , ['accesslevel', '=', 0]]);
           return $current_server_characters::filter($filtersPvp)->get(['obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']);
        }

        private function convertCharactersToModel($current_server_id , $resultArr){
            return $this->support->createModel($current_server_id , $resultArr  , $this->listclassid);
        }

        private function getAllUniqueClanid($resultArr){
            return $resultArr->unique('clanid')->pluck('clanid');
        }

        private function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
            $clanidfilter = new GeneralFilters(['clandatafilter'] , $unique_clan_id);
            return  $current_clandata_db_model::filter($clanidfilter)->get(['clan_name' ,'clan_id']);
        }

        private function convertAllIdClanToName($allModelCharactersPk , $allModelCharactersPvp ,  $result_clan_pk , $result_clan_pvp){
            $this->support->convertIdClanToNameClan($allModelCharactersPk ,  $result_clan_pk);
            $this->support->convertIdClanToNameClan($allModelCharactersPvp ,  $result_clan_pvp);
        }
 
        //insert массовая запись не сработала. Но теперь это и не нужно т.к мы ограничиваем сколько записей 
        //мы получим из игровой базы (настраиваем в конфиге!)
        private function saveSql(&$modelArr){
            if(count($modelArr) > 0){
                foreach($modelArr as $model){
                    $model->save();
                }
            }
        }

        private function saveAll($allModelCharactersPvp , $allModelCharactersPk){
            $this->saveSql($allModelCharactersPvp);
            $this->saveSql($allModelCharactersPk);
        }

    }

?>