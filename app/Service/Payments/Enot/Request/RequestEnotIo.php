<?php

    namespace App\Service\Payments\Enot\Request;


    use Config;
    use Auth;
    use Illuminate\Support\Facades\Http;
    use Illuminate\Http\Client\Response;
    use  Weishaypt\EnotIo\Facades\EnotIo;
    
    class RequestEnotIo
    {
       
        private $project_uuid;
        private $secret_key;
        private $success_url;
        private $fail_url;

        public function __construct()
        {
            //secretKey
            $this->project_uuid = Config::get('enotio.project_uuid');
            //shop_id(uuid)
            $this->secret_key = Config::get('enotio.secret_key');
            $this->success_url = Config::get('enotio.success_url');
            $this->fail_url = Config::get('enotio.fail_url');

        }
        //Новый апи для запроса страницы на оплату
        public  function cretaeUrlPayment($amount , $order_id){
          $dataEn = [
            'amount' => $amount,
            'order_id' => "".$order_id,
            'currency' => "RUB",
            'custom_fields' => "{\"order_id\": \".$order_id.\"}",
            'fail_url' => "".$this->fail_url,
            'success_url' => "".$this->success_url,
           // 'hook_url' => $amount,
            'shop_id' => "".$this->project_uuid,
          ];

          return  Http::withHeaders([
            'Accept' => 'application/json',
            //'Content-Type' => 'application/json',
            'x-api-key' => "".$this->secret_key,
            ])->post('https://api.enot.io/invoice/create' , $dataEn )->json();

        }

        public function cretaeUrlPaymentOld($amount , $order_id){
          $rows = [
           //'time' => Carbon::now(),
            'info' => 'Local payment'
          ];


          $url = EnotIo::getPayUrl($amount, $order_id, null, null, $rows);

          info("Redirect>>>>");
          info($url);

          return $url;
       }
      }
?>