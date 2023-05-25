<?php

    namespace App\Service\Payments\Admin\Filters;


    use Config;
    use App\Service\Payments\Admin\IPaymentsAdminService;
    use App\Service\Utils\FunctionPayments;
    use App\Service\Utils\FunctionSupport;
    use App\Service\Utils\FunctionOtherUser;
    use App\Service\Payments\Admin\Filters\FilterSupport;

    class PaymentsFiltersService implements IPaymentsFiltersService
    {
        //FunctionPayments::createModelInfoAdminPayments($order->id , $order->login , $order->char_name , $order->sum , FunctionSupport::getServerNameById($order->server_id , $this->list_servers) , $payment_name , $order->created_at , $order->status , $user->login);
    
        private $list_servers;
        private $support_paymonts_filters;
        private $filter_support;

        public function __construct() {
            $this->list_servers = Config::get('lineage2.server.list_server');
            $this->support_paymonts_filters = Config::get('lineage2.server.support_payments_filters');
            $this->filter_support = new FilterSupport();
        }

        public function getDataByFilters($array_filtersId , $serach_text , $tables_db_payments){
         
            foreach($array_filtersId as $filterId){
                $this->selectFilter($filterId , $serach_text , $tables_db_payments);
            }
                
            
        }
      
        //'support_payments_filters' =>  [0 => "По аккаунту" , 1 => "По имени чара" , 2 => "По сервису" , 3 => "По дате"],
        private function selectFilter($filterId , $serach_text , $tables_db_payments){
            switch ($filterId) {
                case 0:
                    info("selectFilter>> По аккаунту");
                    $this->filter_support->filterAccounts($serach_text , $tables_db_payments);
                    break;
                case 1:
                    info("selectFilter>> По имени чара");
                    break;
                case 2:
                    info("selectFilter>> По сервису");
                    break;
                case 3:
                    info("selectFilter>> По дате");
                    break;
                default:
                    info("selectFilter>> use Default!!!");
            }
        }
           //'support_paymonts_tables' => [0 => ["paymonts_id" => 0 , "paymonts_name" => "Enot.io" ,"paymont_db_model"=>"App\Models\OrderEnot"]],
        private function forEachTables($array_filtersId , $serach_text , $tables_db_payments){
            foreach($tables_db_payments as $item){

                $db_model = $item['paymont_db_model'];
                $payment_name = $item['paymonts_name'];
                $all_orders = $this->getAllOrders($db_model);
                
                return $this->createModelsAdminPayment($all_orders , $payment_name);
            }
        }
      
       
    }
?>