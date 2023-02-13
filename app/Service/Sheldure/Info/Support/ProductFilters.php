<?php

namespace App\Service\Sheldure\Info\Support;

use Log;
use App\Service\Sheldure\Info\Support\CategoryFilter;

use Request;

    class ProductFilters
    {
     

        protected $filters = [
            //'price' => PriceFilter::class,
            'category' => CategoryFilter::class,
           // 'brand' => BrandFilter::class,
        ];

        public function apply($query)
        {
         
            info("ProductFilters>apply>running");
            
            foreach ($this->filters as $name => $value) {
                info("Запуск");
                $filterInstance = new $this->filters[$name];
                $query = $filterInstance($query, $value);
            }

        return $query;
    }



}

?>