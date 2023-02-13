<?php

namespace App\Service\Sheldure\Info\Support\SqlFilter;
use Log;

class TopPkAndPvpFilter
{
   // $results = User::where([
      //  ['column_name1', '=', $value1],
      //  ['column_name2', '<', $value2],
      //  ['column_name3', '>', $value3]
    //])->get();

    function __invoke($query, $notuse)
    {

        $filtersPvp = [['pvpkills', '>', 0] , ['accesslevel', '=', 0]];
        $filtersPk = [['pkkills', '>', 0] , ['accesslevel', '=', 0]];

        return  $query->where($filtersPvp)->orWhere($filtersPk);
    }
}
?>