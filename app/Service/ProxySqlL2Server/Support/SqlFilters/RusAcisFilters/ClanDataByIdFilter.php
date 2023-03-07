<?php

namespace App\Service\ProxySqlL2Server\Support\SqlFilters\RusAcisFilters;

use Log;
use App\Models\Server\ServerClanData;

class ClanDataByIdFilter
{
    function __invoke($query, $dataOr)
    {
       

        if(isset($query) and isset($dataOr)){
            return $query->where(function ($query) use ($dataOr) {
                foreach ($dataOr as $keyword) {
                   $query->orWhere('clan_id', '=', $keyword);
                }
            });
        }

     
    }

  
}
?>