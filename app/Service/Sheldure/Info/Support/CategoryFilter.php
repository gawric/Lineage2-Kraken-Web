<?php

namespace App\Service\Sheldure\Info\Support;
use Log;

class CategoryFilter
{
   // $results = User::where([
      //  ['column_name1', '=', $value1],
      //  ['column_name2', '<', $value2],
      //  ['column_name3', '>', $value3]
    //])->get();

    function __invoke($query, $categorySlug)
    {
        //info("Категори slug");
        //info($categorySlug);
        $slugtest = [['obj_id', '=', 268481144]];
          // return  $query->where('pvpkills','>' , 0);
          return  $query->where($slugtest);
       
    }
}
?>