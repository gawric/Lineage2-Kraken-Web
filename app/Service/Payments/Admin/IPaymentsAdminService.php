<?php

namespace App\Service\Payments\Admin;

    interface IPaymentsAdminService
    {
        public function getDataAllOrdersPayments($tables_db_payments);
        public function getDataFilterOrdersPayments($tables_db_payments , $filterId);
        public function getDataSalesMonth($tables_db_payments);
    }

?>