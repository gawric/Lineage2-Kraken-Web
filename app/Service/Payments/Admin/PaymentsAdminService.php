<?php

    namespace App\Service\Payments\Admin;


    use Config;
    use App\Service\Payments\Admin\IPaymentsAdminService;
    use App\Service\Utils\FunctionPayments;
    use App\Service\Utils\FunctionSupport;
    use App\Service\Utils\FunctionOtherUser;
    use DB;
    use App\Service\Payments\Admin\Support\SqlSupportPayments;
    use App\Models\Temp\InfoAdminPaymentsMounts;

    class PaymentsAdminService implements IPaymentsAdminService
    {

    
        private $list_servers;
        private $sqlsupport;

        public function __construct() {
            $this->list_servers = Config::get('lineage2.server.list_server');
            $this->sqlsupport = new SqlSupportPayments();
        }

        //InfoAdminL2Accounts
        public function getDataAllOrdersPayments($tables_db_payments){
            $result = $this->forEachTables($tables_db_payments);
            return $this->sortArray($result);
        }

        

        //'support_paymonts_tables' => [0 => ["paymonts_id" => 0 , "paymonts_name" => "Enot.io" ,"paymont_db_model"=>"App\Models\OrderEnot"]],
        private function forEachTables($tables_db_payments){
            foreach($tables_db_payments as $item){

                $db_model = $item['paymont_db_model'];
                $payment_name = $item['paymonts_name'];
                $all_orders = $this->getAllOrders($db_model);
                
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

        public function getDataSalesMonth($tables_db_payments){
            $temp = [];
            foreach($tables_db_payments as $item){

                $db_model = $item['paymont_db_model'];
                $payment_name = $item['paymonts_name'];
                $coll_result = $this->sqlsupport->getSumMonths($db_model);
                $result_array = $this->createModels($coll_result);
                $this->pushModels($result_array , $temp);
            }
            //array_push($temp , $this->createTestModel());

            $temp = $this->sumDublication($temp);
            return $temp;
        }

        private function createModels($coll_result){
            
            return  $coll_result->map(function($item, $key) {									
                            $model = new InfoAdminPaymentsMounts;
                            $model->id = $key;
                            $model->sum = $item->sum;
                            $model->data = $item->period;
                        return $model;
                });
        }

        private function pushModels($coll_result , &$temp){
            
             $coll_result->map(function($item, $key) use(&$temp) {									
                    array_push($temp , $item);
                });
        }

      
        private function sumDublication($tables){
            foreach ($tables as $element) {
                $hash = $element->data;
                if (isset($unique_array[$hash])) {
                    $element->sum += $unique_array[$hash]->sum;
                }
                $unique_array[$hash] = $element;
            }
            return $unique_array;
        }

        private function createTestModel(){
            $model = new InfoAdminPaymentsMounts;
            $model->id = 5;
            $model->sum = 1332;
            $model->data = "2023-04";

            return $model;
        }
     
      
       
    }
?>