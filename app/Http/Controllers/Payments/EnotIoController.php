<?php
  
namespace App\Http\Controllers\Payments;


use App\Http\Controllers\Controller;
use Response;
use App\Models\OrderEnot;
  
use Illuminate\Http\Request;
use App;
use Config;
use Validator;
use Lang;
use App\Service\Status\StatusServer;
use App\Service\Info\ServerStats;
use App\Service\Utils\FunctionSupport;
use App\Service\Utils\FunctionPaymonts;
use Weishaypt\EnotIo;
use App\Http\Requests\EnotIoStoreRequest;
use App\Service\Payments\IPaymentsService;
use App\Service\ProxySqlL2Server\ProxySqlServer;
use App\Service\Registration\Support\SupportFuncReg;
use App\Models\Accounts_expansion;


class EnotIoController extends Controller
{
    private $list_server;
    private $list_payments;
    private IPaymentsService $paymentsService;
    private $list_servers;


    public function __construct(IPaymentsService $service)
    {
        $this->paymentsService = $service;
        $this->list_servers = Config::get('lineage2.server.list_server');
        $this->list_payments = Config::get('lineage2.server.support_paymonts');
    }

    public function paymentUser(EnotIoStoreRequest $request)
    {
        info("use EnotIoController >>>> paymentUser");

        $validated = $request->validated();

        $server_id = FunctionSupport::getDataVariable("select_server_id" , $validated);
        $char_name = FunctionSupport::getDataVariable("char_name" , $validated);
        $select_service_payment = FunctionSupport::getDataVariable("select_service_payment" , $validated);
        $sum = FunctionSupport::getDataVariable("sum" , $validated );
        $accounts_expansion = $this->getAccountsExpansionId($server_id , $this->list_servers , $char_name);
        if(isset($accounts_expansion)){
        
            if(!is_array($accounts_expansion)){
                info("paymentUser>>>> getAccountsExpansionId");
                info($accounts_expansion);
                $model_order = FunctionPaymonts::createOrders($sum , "init" , $char_name , $accounts_expansion->id , now() , now());
                $model_order->save();
            
            
                $url = $this->paymentsService->getPayUrlRequestEnot($sum , $model_order->id);
                info("EnotIoController>>>>paymentUser");
                info($url);
            }
            else{
                info("paymentUser>>>> Fail not found account_expansion");
                return FunctionSupport::getErrorJson(Lang::get('validation.payments_char_name'), Lang::get('validation.payments_char_name'));
                //return Response::json(['error'=>Lang::get('validation.payments_char_name'), 'result'=>'']);
            }
      
          
        }


        return response()->json(['success'=>Lang::get('validation.payments_success')]);
    }

    private function getAccountsExpansionId($server_id , $list_servers , $char_name){
        $developer_id = FunctionSupport::getDeveloperId($server_id , $list_servers);
        if( $developer_id != -1){
            info("paymentUser>>>");
            info($developer_id);
            info("paymentUser>>>server_id");
            info($server_id);
            info("paymentUser>>>char_name");
            info($char_name);
            $this->proxy = new ProxySqlServer($developer_id);
            return $this->proxy->getAccountsExpansionByCharName(FunctionSupport::getModelAccountDb($server_id , $list_servers),  FunctionSupport::getModelCharactersDb($server_id , $list_servers), $char_name);
        }
        }
    

       


    public function index()
    {
        info("use EnotIoController >>>> l2index");

        $MERCHANT_ID   = 15;                 // ID магазина
        $SECRET_WORD   = 'Секретный ключ';   // Секретный ключ
       // $ORDER_AMOUNT  = 10;                 // Сумма заказа
        $PAYMENT_ID    = time();             // ID заказа (мы используем time(), чтобы был всегда уникальный ID)

      

        return view('page_payments' , ['MERCHANT_ID' => $MERCHANT_ID , 'SECRET_WORD' => $SECRET_WORD , 'PAYMENT_ID' => $PAYMENT_ID , 'arrayServersOnlyNameAndId' => FunctionSupport::getServerOnlyNameAndId($this->list_servers) , 'arrayPaymentsOnlyNameAndId' => FunctionPaymonts::getAllPaymentsNameAndId($this->list_payments)]);
    }


    /**
     * Search the order in your database and return that order
     * to paidOrder, if status of your order is 'paid'
     *
     * @param Request $request
     * @param $order_id
     * @return bool|mixed
     */
    public function searchOrder(Request $request, $order_id)
    {
        info("use EnotIoController >>>> searchOrder: orderId");
        info($order_id);

        $order = OrderEnot::where('id', $order_id)->first();

        if($order) {
            $order['_orderSum'] = $order->sum;

            // If your field can be `paid` you can set them like string
            $order['_orderStatus'] = $order['status'];

            // Else your field doesn` has value like 'paid', you can change this value
            $order['_orderStatus'] = ('1' == $order['status']) ? 'paid' : false;

            return $order;
        }

        return false;
    }

    /**
     * When paymnet is check, you can paid your order
     *
     * @param Request $request
     * @param $order
     * @return bool
     */
    public function paidOrder(Request $request, $order)
    {
        info("use EnotIoController >>>> paidOrder: order");
        info($order);

        $order->status = 'paid';
        $order->save();

        //

        return true;
    }

    /**
     * Start handle process from route
     *
     * @param Request $request
     * @return mixed
     */
    public function handlePayment(Request $request)
    {
        return EnotIo::handle($request);
    }
}