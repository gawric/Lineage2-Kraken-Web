<?php

namespace App\Service\Payments;

    interface IPaymentsService
    {
        public function getPayUrlRequestEnot($amount , $order_id);
        public function getPayUrlRequestOldEnot($amount , $order_id);
    }

?>