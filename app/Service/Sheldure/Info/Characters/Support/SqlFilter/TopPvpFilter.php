<?php

namespace App\Service\Sheldure\Info\Characters\Support\SqlFilter;
use Log;
use Config;

class TopPvpFilter
{
   // $results = User::where([
      //  ['column_name1', '=', $value1],
      //  ['column_name2', '<', $value2],
      //  ['column_name3', '>', $value3]
    //])->get();

    function __invoke($query, $slug)
    {
        $top_count = Config::get('lineage2.server.top_count');
        return  $query->where($slug)->orderBy('pvpkills', 'desc')->skip(0)->take($top_count);
    }
}
?>