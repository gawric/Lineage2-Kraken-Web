<?php

namespace App\Service\ProxySqlL2Server\Support\SqlFilters\RusAcisFilters;
use Log;
use Config;

class TopPkPvpFilter
{
   // $results = User::where([
      //  ['column_name1', '=', $value1],
      //  ['column_name2', '<', $value2],
      //  ['column_name3', '>', $value3]
    //])->get();

    function __invoke($query, $slug)
    {
        $top_count = Config::get('lineage2.server.top_count');
        return  $query->where('pkkills', '>', 0)->orWhere('pvpkills', '>', 0)->orderBy('pkkills', 'desc')->skip(0)->take($top_count);
    }
}
?>