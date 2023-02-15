<?php

    namespace App\Service\Info;

    use Config;
    use App\Models\CharactersStatic;
    use Log;
    use Illuminate\Support\Facades\DB;

    class ServerStats implements IServerStats
    {
        public function __construct() {}
        
        function getAllData($server_id , $top_count){
            //info(CharactersStatic::all());
        }


    }
?>