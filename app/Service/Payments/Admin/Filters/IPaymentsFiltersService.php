<?php

namespace App\Service\Payments\Admin\Filters;

    interface IPaymentsFiltersService
    {
       public function getDataByFilters($array_filtersId , $serach_text , $tables_db_payments);
    }

?>