<?php

    namespace App\Service\Payments\Enot;

    use App\Service\PersonalArea\Dashboard\Support\SqlSupport;
    use Config;
    use Auth;
    use App\Service\PersonalArea\Dashboard\Ajax\DashboardAjax;
    use App\Service\Utils\FunctionAuthUser;
    use App\Service\Utils\FunctionSupport;
    use App\Models\Temp\InfoDashboard;
    use App\Service\Payments\IPaymentsService;
  
    
    class EnotIoService implements IPaymentsService
    {

     
        public function __construct() {
  
        }


        public function getPayUrlRequestEnot($amount , $order_id){
            $url = EnotIo::getPayUrl($amount, $order_id);
            $redirect = EnotIo::redirectToPayUrl($amount, $order_id);
            info($url);
        }
        //public function sendGetRequestEnot(){
           // $response = Http::get('http://example.com/users', [
              //  'name' => 'Taylor',
              ////  'page' => 1,
            //]);
       // }
    }
?>