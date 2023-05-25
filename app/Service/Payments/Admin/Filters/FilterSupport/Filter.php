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
    
       // private $list_servers;
        //private $support_paymonts_filters;

        public function __construct() {
        ////   $this->list_servers = Config::get('lineage2.server.list_server');
        //    $this->support_paymonts_filters = Config::get('lineage2.server.support_payments_filters');
        }

        public function filterAccounts($serach_text , $tables_db_payments){
            $temp = [];
            foreach($tables_db_payments as $item){
                $db_model = $item['paymont_db_model'];
                $payment_name = $item['paymonts_name'];
                $result = $this->likeAccounts($db_model , $serach_text);
            }

        }

        private function likeAccounts($db_model , $serach_text){
            if(isset($serach_text)){
                $clanidfilter = new GeneralFilters(['simplefilterlike'] , [['login', '=', $username]]);
                return  $db_model::filter($clanidfilter)->get();
            }

        }
      
       
    }
?>