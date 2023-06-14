<?php

 namespace App\Service\PersonalArea\AdminPromo;


    interface IAdminPromo
    {
        public function createPromoCodes($itemsnumber , $itemspromonumber , $selectitem): array;
        public function getAllPromoCodes(): array;
        public function activatePromoCode(string $account_name  , string $char_name , int $server_id , string $promo_code);
    }

?>