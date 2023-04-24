<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy\PersonArea\Characters;

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
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateItemsSql;

    class ItemsRusAcis extends AcisTemplateItemsSql {
        public function addL2itemRusAcis($modelItemsDb , $char_name , $item_id, $count){
            info("L2Items последний метод запроса");
        }
    }
?>