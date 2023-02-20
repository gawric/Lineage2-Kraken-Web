<?php

namespace App\Service\Sheldure\Info\Characters\Support\SqlFilter;

use Log;
use App\Models\Server\ServerClanData;

class ClanDataByIdFilter
{
    function __invoke($query, $dataOr)
    {
       

        //info($query->orWhere([['clan_id', '=', '1'],['clan_id', '=', '2']])->toSql());

       return $query->where(function ($query) use ($dataOr) {
            foreach ($dataOr as $keyword) {
               $query->orWhere('clan_id', '=', $keyword);
            }
        });
    }

  
}
?>