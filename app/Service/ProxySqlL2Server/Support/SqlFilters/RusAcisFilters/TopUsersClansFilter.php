<?php

namespace App\Service\ProxySqlL2Server\Support\SqlFilters\RusAcisFilters;
use Log;
use Config;
use DB;


class TopUsersClansFilter
{
   // $results = User::where([
      //  ['column_name1', '=', $value1],
      //  ['column_name2', '<', $value2],
      //  ['column_name3', '>', $value3]
    //])->get();

    function __invoke($query, $slug)
    {

       return  $query->select('clanid', DB::raw('COUNT(clanid) AS count'))
       ->where("clanid", ">", 0)
       ->groupBy('clanid')
       ->havingRaw('count > 1')
       ->pluck('clanid','count');
    
    }


}
?>