<?php

namespace App\Service\Payments\Admin\Filters\FilterSupport;

    interface IFilter
    {
        public function filterAccounts($serach_text , $tables_db_payments);
        public function filterChars($serach_text , $tables_db_payments);
        public function filterPaymentService($serach_text , $tables_db_payments);
        public function filterData($serach_text , $tables_db_payments);
    }

?>