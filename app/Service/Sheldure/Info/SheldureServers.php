<?php

namespace App\Service\Sheldure\Info;


use Config;
use App\Service\Status\StatusServer;
use App\Service\Status\Support\SupportFuncStatus;
use App\Models\InfoServer;
use App\Service\Sheldure\ISheldure;
use App\Service\Sheldure\Info\Support\ProductFilters;
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

            
           //$list_server = Config::get('lineage2.server.list_server');

            $this->ss = new StatusServer($this->timeout);  
            $this->sf = new SupportFuncStatus($this->ss);
           
            $complete_server = $this->sf->getStatusServersFunct($this->list_server);

            $this->saveArrToSql($complete_server);
        
           // info($complete_server);
        }

        private function saveArrToSql($complete_server){
            if(count($complete_server) > 0){
                $this->ss->delAllInfoServer();
                $this->ss->saveAllInfoServer($complete_server);
            }
        }

        function calcStaticCharacters(){
            info("Запуск планировщика задач! SheldureServers->calcStaticCharacters");
            $filters = new ProductFilters();
            $result = ServerCharacters::filter($filters)->get();
            info("Завершение планировщика задач! SheldureServers->calcStaticCharacters результат: $result");
        }
    
      
   
    }
?>