<?php

namespace App\Service\Sheldure\Info\Characters\Support\SqlFilter;
use Log;

class SimpleFilter
{
   // $results = User::where([
      //  ['column_name1', '=', $value1],
      //  ['column_name2', '<', $value2],
      //  ['column_name3', '>', $value3]
    //])->get();

    function __invoke($query, $categorySlug)
    {
          return  $query->where($categorySlug);
    }
}
?>