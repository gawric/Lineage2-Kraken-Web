<?php

namespace App\Service\Sheldure\Info\Characters\Support;

use Config;
use App\Service\Status\StatusServer;
use App\Service\Status\Support\SupportFuncStatus;
use App\Models\InfoServer;
use App\Models\CharactersStatic;
use App\Service\Sheldure\ISheldure;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Service\Sheldure\Info\Characters\Support\SqlFilter\ClanDataByIdFilter;
use App\Models\Server\ServerCharacters;
use App\Models\Server\ServerClanData;
use Illuminate\Support\Collection;
use App\Service\Sheldure\Info\Characters\Support\SupportFunc\SupportFunc;
use Illuminate\Support\Facades\DB;
use App\Service\ProxySqlL2Server\ProxySqlServer;

    class CalcCharacters
    {
        private $support;
        private $listclassid;
        private ProxySqlServer $proxySql;

        public function __construct() {
            $this->support = new SupportFunc();
            $this->listclassid = Config::get('lineage2.class_id.list_class_id');
        }
     
        public function run($current_servers){
            

            $current_server_characters = $current_servers['server_db_model'];
            $current_clandata_db_model = $current_servers['clandata_db_model'];
            //ID определяется в конфиге
            $current_server_id = $current_servers['id'];
            $server_developer_id = $current_servers['developer_id'];

            $this->proxySql = new ProxySqlServer($server_developer_id);
           // info("Запуск планировщика задач! SheldureServers->calcStaticCharacters  $current_server_id ");

            $resultArrPk = $this->proxySql->getPkPvpServerCharacters($current_server_characters);


            $allModelCharactersPk = $this->convertCharactersToModel($current_server_id , $resultArrPk);



            $unique_clan_id_pk = $this->getAllUniqueClanid($resultArrPk);


            $result_clan_pk = $this->proxySql->getClanIdToClanName($unique_clan_id_pk , $current_clandata_db_model);

            $allModelCharactersPvp = [];
 
            $this->convertAllIdClanToName($allModelCharactersPk ,  $result_clan_pk);
            $this->proxySql->saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk);
     
           // info("Завершение планировщика задач! SheldureServers->calcStaticCharacters для сервера:  $current_server_id   ");

        }

        public function getAllUniqueClanid($resultArr){
            if(isset($resultArr)){
                return $resultArr->unique('clanid')->pluck('clanid');
            }
            
        }

        public function convertAllIdClanToName($allModelCharactersPk ,  $result_clan_pk ){
            $this->support->convertIdClanToNameClan($allModelCharactersPk ,  $result_clan_pk);
            //$this->support->convertIdClanToNameClan($allModelCharactersPvp ,  $result_clan_pvp);
        }

        public function convertCharactersToModel($current_server_id , $resultArr){
            return $this->support->createModel($current_server_id , $resultArr  , $this->listclassid);
        }


       

    }

?>