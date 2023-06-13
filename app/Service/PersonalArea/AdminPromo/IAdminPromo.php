<?php

 namespace App\Service\PersonalArea\AdminPromo;


    interface IAdminPromo
    {
        public function createPromoCodes($itemsnumber , $itemspromonumber , $selectitem): array;
        public function getAllPromoCodes(): array;
    }

?>