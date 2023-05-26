<?php

    namespace App\Service\Payments\Admin\Filters\FilterSupport;


    use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
    use Config;
    use App\Service\Payments\Admin\IPaymentsAdminService;
    use App\Service\Utils\FunctionPayments;
    use App\Service\Utils\FunctionSupport;
    use App\Service\Utils\FunctionOtherUser;
    use App\Service\Payments\Admin\Filters\FilterSupport\IFilter;

    class Filter implements IFilter
    {
        //FunctionPayments::createModelInfoAdminPayments($order->id , $order->login , $order->char_name , $order->sum , FunctionSupport::getServerNameById($order->server_id , $this->list_servers) , $payment_name , $order->created_at , $order->status , $user->login);
    
        private $list_servers;
        //private $support_paymonts_filters;

        public function __construct() {
          $this->list_servers = Config::get('lineage2.server.list_server');
        //    $this->support_paymonts_filters = Config::get('lineage2.server.support_payments_filters');
        }

        public function filterAccounts($serach_text , $tables_db_payments){
           $temp = [];
            foreach($tables_db_payments as $item){
                $db_model = $item['paymont_db_model'];
                $payment_name = $item['paymonts_name'];

                $all_orders = $this->likeAccounts($db_model , $serach_text);
                $temp = $this->createModelsAdminPayment($temp  , $all_orders , $payment_name);
            }
           return $temp;
        }

        private function likeAccounts($db_model , $serach_text){
            if(isset($serach_text)){
                $clanidfilter = new GeneralFilters(['simplefilter'] , [['login', 'LIKE', '%'.$serach_text.'%']]);
                return  $db_model::filter($clanidfilter)->get();
            }

        }

        public function filterChars($serach_text , $tables_db_payments){
            $temp = [];
              foreach($tables_db_payments as $item){
                $db_model = $item['paymont_db_model'];
                $payment_name = $item['paymonts_name'];
                
                $all_orders = $this->likeChars($db_model , $serach_text);
                $temp = $this->createModelsAdminPayment($temp  , $all_orders , $payment_name);
            }
            return $temp;
        }

        private function likeChars($db_model , $serach_text){
            if(isset($serach_text)){
                $clanidfilter = new GeneralFilters(['simplefilter'] , [['char_name', 'LIKE', '%'.$serach_text.'%']]);
                return  $db_model::filter($clanidfilter)->get();
            }

        }

        public function filterPaymentService($serach_text , $tables_db_payments){
            $temp = [];
              foreach($tables_db_payments as $item){
                $db_model = $item['paymont_db_model'];
                $payment_name = $item['paymonts_name'];

                if (strcasecmp($payment_name, $serach_text) == 0) {
                    $all_orders = $this->likePaymentService($db_model , $serach_text);
                    $temp = $this->createModelsAdminPayment($temp  , $all_orders , $payment_name);
                }
              
            }
            return $temp;
        }

        private function likePaymentService($db_model , $serach_text){
            if(isset($serach_text)){
                $clanidfilter = new GeneralFilters(['simplefilter'] , []);
                return  $db_model::filter($clanidfilter)->get();
            }

        }

 
        public function filterData($search_text , $tables_db_payments){
            $temp = [];
            $explodeArray = $this->explodeStr($search_text);

              if(is_array($explodeArray)){
                  $data1 = trim($explodeArray[0]);
                  $data2 = trim($explodeArray[1]);
                  info($data1);
                  info($data2 );
                  foreach($tables_db_payments as $item){
                      $db_model = $item['paymont_db_model'];
                      $payment_name = $item['paymonts_name'];
 
      
                      $all_orders = $this->likePaymentService($db_model , $serach_text);
                      $temp = $this->createModelsAdminPayment($temp  , $all_orders , $payment_name);
            }
    
           }

           info("temp");
           info($temp);
           return $temp;
        }
        

 
        private function explodeStr($search_text){
            info(strripos($search_text, '|'));
            if(strripos($search_text, '|') != false) {
                info("TRUE");
                return explode("|", $search_text);
              }
            return "";
        }

 



        private function createModelsAdminPayment($temp , $all_orders , $payment_name){
            return $this->forEachOrders($temp , $all_orders , $payment_name);
        }

        private function forEachOrders($temp , $all_orders , $payment_name){
            $all_orders->each(function($order) use (&$temp , $payment_name) 
            {
                $user =  FunctionOtherUser::getUserById($order->accounts_expansion_id);
                $model = FunctionPayments::createModelInfoAdminPayments($order->id , $order->login , $order->char_name , $order->sum , FunctionSupport::getServerNameById($order->server_id , $this->list_servers) , $payment_name , $order->created_at , $order->status , $user->login);
                array_push($temp , $model);
            });

            return $temp;
        }
      
       
    }
?>