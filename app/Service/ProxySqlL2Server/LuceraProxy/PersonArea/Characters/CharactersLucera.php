<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy\PersonArea\Characters;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateCharactersSql;
 use Illuminate\Database\Eloquent\ModelNotFoundException;
 use Lang;
 use App\Models\Temp\InfoDashboard;
 use App\Service\Utils\FunctionAuthUser;
 use App\Service\Utils\FunctionSupport;
 use App\Service\ProxySqlL2Server\Template\Chars\CharactersTemplateChars;

    class CharactersLucera extends CharactersTemplateChars {
        public function getAllCharsLucera($server_name , $auth_user_id , $modelCharactersDb , $server_id){
           // info("getAllCharsLucera>>>use characters to lucera");
            return $this->getAllChars($server_name , $auth_user_id , $modelCharactersDb , $server_id);
        }
    }
?>