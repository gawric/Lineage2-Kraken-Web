<?php

    namespace App\Service\Payments\Admin;


    use Config;
    use App\Service\Payments\Admin\IPaymentsAdminService;
    use App\Service\Utils\FunctionPayments;
    use App\Service\Utils\FunctionSupport;
    use App\Service\Utils\FunctionOtherUser;

    class PaymentsAdminService implements IPaymentsAdminService
    {

    
        private $list_servers;

        public function __construct() {
            $this->list_servers = Config::get('lineage2.server.list_server');
        }

        //InfoAdminL2Accounts
        public function getDataAllOrdersPayments($tables_db_payments){
            $result = $this->forEachTables($tables_db_payments);
            return $this->sortArray($result);
        }

        

        //'support_paymonts_tables' => [0 => ["paymonts_id" => 0 , "paymonts_name" => "Enot.io" ,"paymont_db_model"=>"App\Models\OrderEnot"]],
        private function forEachTables($tables_db_payments){
            foreach($tables_db_payments as $item){

                //info($item['paymonts_id']);
               // info($item['paymonts_name']);
               // info($item['paymont_db_model']);

                $db_model = $item['paymont_db_model'];
                $payment_name = $item['paymonts_name'];
                $all_orders = $this->getAllOrders($db_model);
 
               // dd($all_orders);
                return $this->createModelsAdminPayment($all_orders , $payment_name);
            }
        }

        private function getAllOrders($db_model){
            return $db_model::all();
        }

        private function createModelsAdminPayment($all_orders , $payment_name){
            return $this->forEachOrders($all_orders , $payment_name);
        }

        private function forEachOrders($all_orders , $payment_name){
            $temp = [];
            $all_orders->each(function($order) use (&$temp , $payment_name) 
            {
                $user =  FunctionOtherUser::getUserById($order->accounts_expansion_id);
                $model = FunctionPayments::createModelInfoAdminPayments($order->id , $order->login , $order->char_name , $order->sum , FunctionSupport::getServerNameById($order->server_id , $this->list_servers) , $payment_name , $order->created_at , $order->status , $user->login);
                array_push($temp , $model);
            });

            return $temp;
        }

        private function sortArray($arrayResult){
            usort($arrayResult, function ($a, $b) {
                return strtotime($a->payment_data) - strtotime($b->payment_data);
            });
            return array_reverse($arrayResult);
        }

        public function getDataFilterOrdersPayments($tables_db_payments , $filterId){
            info("getDataFilterOrdersPayments");
        }
      
       
    }
?>