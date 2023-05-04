<?php

namespace App\Service\PersonalArea\AdminDashboard\Support;

use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Models\Temp\InfoDashboard;
use App\Service\Utils\FunctionSupport;
use Lang;
use App\Models\Accounts_expansion;

    class AdminSqlSupport
    {
       
        public  function isExistAccountExpansion($account_expansion_id){
            return Accounts_expansion::find($account_expansion_id);
        }
    }

?>