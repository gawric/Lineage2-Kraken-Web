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
use App\Service\Sheldure\Info\Support\CalcCharacters;


    class SheldureServers implements ISheldure
    {
        private $list_server;
        private $timeout;
        private $calc;

        public function __construct() {
            $this->list_server = Config::get('lineage2.server.list_server');
            $this->timeout = Config::get('lineage2.server.timeout_socket');
            $this->calc = new CalcCharacters();
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

        function calcStaticCharacters(){
            info("Запуск планировщика задач! SheldureServers->calcStaticCharacters");
            array_walk($this->list_server, "self::startWork");
            info("Завершение планировщика задач! SheldureServers->calcStaticCharacters");

        }

        public function startWork(&$item, $key)
        {  
            $this->calc->run($item);
        }

        

        

    
      
   
    }
?>