<?php

namespace App\Service\Payments\Admin\Filters\FilterSupport;

    interface IFilter
    {
        public function filterAccounts($serach_text , $tables_db_payments);
    }

?>