<?php

namespace App\Service\Sheldure\Info;


use Config;
use App\Service\Status\StatusServer;
use App\Service\Status\Support\SupportFuncStatus;
use App\Models\InfoServer;
use App\Service\Sheldure\ISheldure;
use App\Service\Sheldure\Info\Support\GeneralFilters;
use App\Models\CharactersStatic;
use App\Models\Server\ServerCharacters;

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

            $result = ServerCharacters::filter($filters)->get(['obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']);
           // $result1 = ServerCharacters::filter($filters1)->get(['obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']);
            //$pkkills = ServerCharacters::filter($filtersPk)->get(['obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']);

            info("Завершение планировщика задач! SheldureServers->calcStaticCharacters результат: $result");
           // info("Завершение планировщика задач! SheldureServers->calcStaticCharacters результат: $result1");
        }
    
      
   
    }
?>