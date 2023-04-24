<?php

namespace App\Service\ProxySqlL2Server\Template\Acis;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;


   class AcisTemplateItemsSql 
   {
        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
            $clanidfilter = new GeneralFilters(['clandatafilter'] , $unique_clan_id);
            return  $current_clandata_db_model::filter($clanidfilter)->get(['clan_name' ,'clan_id']);
        }
   }
?>