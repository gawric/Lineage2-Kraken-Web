<?php

    namespace App\Service\Status;

    use Config;
    use App\Service\Status\Support\AvailabilityPort;

    class StatusServer implements IStatusServer
    {
        protected $ap;
        

        public function __construct($timeout) {
           
            $this->ap = new AvailabilityPort($timeout);
        }


        function getOnline($ip , $login_port , $game_port){
            return $this->ap->getOnline($ip , $login_port , $game_port);
        }

        function getCountUsers(){
            return 10;
        }
    }
?>