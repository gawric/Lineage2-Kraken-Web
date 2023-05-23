<?php

    namespace App\Service\Payments\Admin;


    use Config;
    use App\Service\Payments\Admin\IPaymentsAdminService;
    
    class PaymentsAdminService implements IPaymentsAdminService
    {

    

        public function __construct() {
        
        }

        //InfoAdminL2Accounts
        public function getDataAllOrdersPayments($tables_db_payments){
            $this->forEachTables($tables_db_payments);
        }
        //'support_paymonts_tables' => [0 => ["paymonts_id" => 0 , "paymonts_name" => "Enot.io" ,"paymont_db_model"=>"App\Models\OrderEnot"]],
        private function forEachTables($tables_db_payments){
            foreach($tables_db_payments as $item){
                info($item['paymonts_id']);
                info($item['paymonts_name']);
                info($item['paymont_db_model']);
            }
        }

        private function getAllOrders(){

        }
      
       
    }
?>