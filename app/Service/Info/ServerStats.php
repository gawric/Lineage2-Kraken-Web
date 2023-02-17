<?php

    namespace App\Service\Info;

    use Config;
    use App\Models\CharactersStatic;
    use Log;
    use App\Service\ProxyFilters\GeneralFilters;

    class ServerStats implements IServerStats
    {
        private $top_count;

        public function __construct() {
            $this->top_count = Config::get('lineage2.server.top_count');
        }
        
  
        public  function getDataPk($server_id){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['pk', '>', 0] , ['server_id', '=', $server_id]]);
            return CharactersStatic::filter($filtersPk)->limit($this->top_count)->get(['id', 'name' , 'class' , 'clan' , 'lvl' , 'pvp' , 'pk' , 'onlinetime' , 'online'])
            ->sortByDesc('pk');
        }

        public function getDataPvp($server_id){
            $filtersPvp = new GeneralFilters(['simplefilter'] , [['pvp', '>', 0] , ['server_id', '=', $server_id]]);
            return CharactersStatic::filter($filtersPvp)->limit($this->top_count)->get(['id', 'name' , 'class' , 'clan' , 'lvl'  , 'pvp' , 'pk' , 'onlinetime' , 'online'])
            ->sortByDesc('pvp');
        }
    }
?>