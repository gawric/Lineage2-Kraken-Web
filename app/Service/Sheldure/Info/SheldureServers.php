<?php

namespace App\Service\Sheldure\Info;


use Config;
use App\Service\Status\StatusServer;
use App\Service\Status\Support\SupportFuncStatus;
use App\Models\InfoServer;
use App\Models\CharactersStatic;
use App\Service\Sheldure\ISheldure;
use App\Service\Sheldure\Info\Support\GeneralFilters;
use App\Service\Sheldure\Info\Support\SqlFilter\ClanDataByIdFilter;
use App\Models\Server\ServerCharacters;
use App\Models\Server\ServerClanData;
use Illuminate\Support\Collection;



    class SheldureServers implements ISheldure
    {
        private $list_server;
        private $timeout;

        public function __construct() {
            $this->list_server = Config::get('lineage2.server.list_server');
            $this->timeout = Config::get('lineage2.server.timeout_socket');
        }

        function calcInfoServers(){
            info("Запуск планировщика задач! SheldureServers->calcInfoServers");

            $this->ss = new StatusServer($this->timeout);  
            $this->sf = new SupportFuncStatus($this->ss);
           
            $complete_server = $this->sf->getStatusServersFunct($this->list_server);

            $this->saveArrToSql($complete_server);
        
            info("Завершение планировщика задач! SheldureServers->calcInfoServers");
        }

        private function saveArrToSql($complete_server){
            if(count($complete_server) > 0){
                $this->ss->delAllInfoServer();
                $this->ss->saveAllInfoServer($complete_server);
            }
        }


       // $table->integer('obj_id')->unsigned();
       // $table->integer('server_id')->unique();
        //$table->string('name');
        //$table->string('class');
       // $table->string('clan');
       // $table->integer('lvl');
        //$table->integer('pvp');
        //$table->integer('pk');
       // $table->integer('onlinetime');
       // $table->boolean('online');

        function calcStaticCharacters(){
            info("Запуск планировщика задач! SheldureServers->calcStaticCharacters");

            $filters = new GeneralFilters(['toppkandpvp'] , "");
           // $filters1 = new GeneralFilters(['simplefilter'] , [['obj_id', '=', 268481144]]);
            $resultArr = ServerCharacters::filter($filters)->get(['obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']);
            $allModelCharacters = $this->createModel($resultArr);
          
            $unique_clan_id = $resultArr->unique('clanid')->pluck('clanid');

            $clanidfilter = new GeneralFilters(['clandatafilter'] , $unique_clan_id);
            $result_clan = ServerClanData::filter($clanidfilter)->get(['clan_name' ,'clan_id']);

           // info($allModelCharacters); 
            foreach($allModelCharacters as $model){
                $model->clan = $this->getClanName($result_clan , $model->clan);
                info($model); 
            }

            
            //info("Завершение планировщика задач! SheldureServers->calcStaticCharacters  unique_clan_id результат: $unique_clan_id  ");
            //
            //info("Завершение планировщика задач! SheldureServers->calcStaticCharacters result_clan результат: $result_clan  ");
            info("Завершение планировщика задач! SheldureServers->calcStaticCharacters result результат: ");
            //info($allModelCharacters); 
           // info("Завершение планировщика задач! SheldureServers->calcStaticCharacters modelCharacters результат: $modelCharacters ");
            //info("Завершение планировщика задач! SheldureServers->calcStaticCharacters  unique_clan_id результат: ");
           
           // info("Завершение планировщика задач! SheldureServers->calcStaticCharacters результат: $result1");
        }

        private function createModel($resultArr){
            $temp = [];
            if(isset($resultArr)){
                foreach($resultArr as $valueArr){
                    array_push($temp , new CharactersStatic($valueArr));
                }
            }
           return $temp;
        } 



        private function getClanName($result_clan , $model_clan_id){
                if(isset($result_clan)){
                    return $this->searchId($result_clan , $model_clan_id);
                }
                return "Non";
        }

        private function searchId($result_clan , $model_clan_id){

            $name = "Non";
            foreach($result_clan as $currentClanId){
                $clan_id_server = (int) $currentClanId['clan_id'];
                
                if(!is_null($model_clan_id)){
                    if($clan_id_server == $model_clan_id){
                        $name = $currentClanId['clan_name'];
                    }
                }
      
            }
            
           // info("Закончили поиск! $name");
           return $name;
        }

        

    
      
   
    }
?>