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
    use Weishaypt\EnotIo\Facades\EnotIo;
    use Illuminate\Support\Facades\Http;
    use Illuminate\Http\Client\Response;
    use App\Service\Payments\Enot\Request\RequestEnotIo;
    
    class EnotIoService implements IPaymentsService
    {

        private RequestEnotIo $requestEnotIo;

        public function __construct() {
          $this->requestEnotIo = new RequestEnotIo();
        }

        public function getPayUrlRequestEnot($amount , $order_id){
          $response = $this->requestEnotIo->cretaeUrlPayment($amount , $order_id);
          if(isset($response)){
            if($response['status'] == 200){
              $array = $response['data'];
              return $array['url'];
            }
            $this->printLogError($response);
          }

          return "";
        }

        private function printLogError($response){
          if(isset($response['error'])){
            info("EnotIoService>>>printLogError>>>> Ошибка создания страницы платежа EnotIo " . $response['error']);
            //info($response['error']);
          }
          else{
            info("EnotIoService>>>printLogError>>>> Ошибка создания страницы платежа EnotIo");
            info($response);
          }
        }
      
       
    }
?>