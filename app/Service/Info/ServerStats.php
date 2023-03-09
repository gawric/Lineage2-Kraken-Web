<?php

    namespace App\Service\Info;

    use Config;
    use App\Models\CharactersStatic;
    use Log;
    use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
    use App\Models\ClanStatic;

    class ServerStats implements IServerStats
    {
        private $top_count;

        public function __construct() {
            $this->top_count = Config::get('lineage2.server.top_count');
        }
        
  
        public  function getDataPk($server_id){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['pk', '>', 0] , ['server_id', '=', $server_id]]);
            $result =  CharactersStatic::filter($filtersPk)->limit($this->top_count)->get(['id', 'name' , 'class' , 'clan' , 'lvl' , 'pvp' , 'pk' , 'onlinetime' , 'online'])
            ->sortByDesc('pk');

            return $result;
        }

        public function getDataPvp($server_id){
            $filtersPvp = new GeneralFilters(['simplefilter'] , [['pvp', '>', 0] , ['server_id', '=', $server_id]]);
            return CharactersStatic::filter($filtersPvp)->limit($this->top_count)->get(['id', 'name' , 'class' , 'clan' , 'lvl'  , 'pvp' , 'pk' , 'onlinetime' , 'online'])
            ->sortByDesc('pvp');
        }
        function getDataClan($server_id){
            $filtersClan = new GeneralFilters(['simplefilter'] , [['clan_id', '>', 0] , ['server_id', '=', $server_id]]);
            $sorted =   ClanStatic::filter($filtersClan)->limit($this->top_count)->get(['id', 'clan_id', 'clan_name' , 'server_id' , 'clan_level' , 'reputation_score'  , 'hasCastle' , 'ally_id' , 'ally_name' , 'member'])
           ->sortByDesc(function ($model, $key) {
                return $model['member'].$model['clan_level'].$model['reputation_score'];
            });

            return $this->convert($sorted->toArray());
        }
        //по не понятным причинами json encode возвращает [1:{model},2:{model},3:{model}]
        //а должна возвращать [{model},{model},{model}]
        function convert($original_array){
            $temp = [];
            foreach($original_array as $key => $value){
                array_push($temp, $value);
            }

            return $temp;
        }
    }
?>