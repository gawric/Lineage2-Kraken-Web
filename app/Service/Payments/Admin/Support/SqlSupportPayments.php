<?php

    namespace App\Service\Payments\Admin\Support;


    use Config;
    use App\Service\Payments\Admin\IPaymentsAdminService;
    use App\Service\Utils\FunctionPayments;
    use App\Service\Utils\FunctionSupport;
    use App\Service\Utils\FunctionOtherUser;
    use App\Service\Payments\Admin\Filters\FilterSupport\Filter;
    use DB;

    class SqlSupportPayments
    {
        //FunctionPayments::createModelInfoAdminPayments($order->id , $order->login , $order->char_name , $order->sum , FunctionSupport::getServerNameById($order->server_id , $this->list_servers) , $payment_name , $order->created_at , $order->status , $user->login);
    
        private $list_servers;


        public function __construct() {
            $this->list_servers = Config::get('lineage2.server.list_server');
  
        }

        public function getSumMonths($db_model){
            if(isset($db_model)){
                return $db_model::select(DB::raw("SUM(sum) as sum, date_format(created_at, '%Y-%m') as period"))
                ->groupBy('period')
                ->get();
            }
            return [];
           
        }
      
       
    }
?>