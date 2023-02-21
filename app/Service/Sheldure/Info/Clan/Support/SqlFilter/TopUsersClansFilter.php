<?php

namespace App\Service\Sheldure\Info\Clan\Support\SqlFilter;
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
       // $top_count = Config::get('lineage2.server.top_count');
       // $sql = "SELECT `clanid` ,COUNT(clanid) AS `count` FROM `characters` GROUP BY `clanid` HAVING `count` > 1 ORDER BY `count` DESC LIMIT 10";
       // $query->select(DB::raw($sql));
       return  $query->select('clanid', DB::raw('COUNT(clanid) AS count'))
       ->groupBy('clanid')
       ->havingRaw('count > 1')
       ->pluck('clanid','count');
      // ->skip(0)
       //->take($top_count);
       
       // $collection = collect($resultArr);
        //$uniqueid = $this->getAllUniqueClanid($collection);
       // info("RESUUUUULT TopUsersClansFilter");
       // info($uniqueid);

      //  return  $query->where($slug)->orderBy('pkkills', 'desc')->skip(0)->take($top_count);
    }

    //private function getAllUniqueClanid($resultArr){
    //    return $resultArr->unique('clanid')->pluck('clanid');
    //}
}
?>