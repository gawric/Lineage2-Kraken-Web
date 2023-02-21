<?php

namespace App\Service\Sheldure\Info;


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
use App\Service\Sheldure\Info\Characters\Support\CalcCharacters;
use App\Service\Sheldure\Info\Clan\CalcClan;


    class SheldureServers implements ISheldure
    {
        private $list_server;
        private $timeout;
        private $calc;
        private $calcClan;

        public function __construct() {
            $this->list_server = Config::get('lineage2.server.list_server');
            $this->timeout = Config::get('lineage2.server.timeout_socket');
            $this->calc = new CalcCharacters();
            $this->calcClan = new CalcClan();
        }

        function calcInfoServers(){
      

            $this->ss = new StatusServer($this->timeout);  
            $this->sf = new SupportFuncStatus($this->ss);
           
            $complete_server = $this->sf->getStatusServersFunct($this->list_server);
            $this->saveArrToSql($complete_server);
        }

        public function calcStaticCharacters(){
            $this->clearTableCharactersStatic();
            array_walk($this->list_server, "self::startWork");
        }

        public function calcStaticClans(){
            array_walk($this->list_server, "self::startWorkClan");
        }









        private function  clearTableCharactersStatic(){
            CharactersStatic::truncate();
        }

        public function startWork(&$item, $key)
        {  
            $this->calc->run($item);
        }

        public function startWorkClan(&$item, $key)
        {  
            $this->calcClan->run($item);
        }

        private function saveArrToSql($complete_server){
            if(count($complete_server) > 0){
                $this->ss->delAllInfoServer();
                $this->ss->saveAllInfoServer($complete_server);
            }
        }

        

        

    
      
   
    }
?>