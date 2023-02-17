<?php

    namespace App\Service\Info;

    use Config;
    use App\Models\CharactersStatic;
    use Log;
    use App\Service\ProxyFilters\GeneralFilters;

    class ServerStats implements IServerStats
    {
        public function __construct() {}
        
  
        public  function getDataPk($server_id){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['pk', '>', 0] , ['server_id', '=', $server_id]]);
            return CharactersStatic::filter($filtersPk)->get()->sortByDesc('pk');
        }

        public function getDataPvp($server_id){
            $filtersPvp = new GeneralFilters(['simplefilter'] , [['pvp', '>', 0] , ['server_id', '=', $server_id]]);
            return CharactersStatic::filter($filtersPvp)->get()->sortByDesc('pvp');
        }
    }
?>