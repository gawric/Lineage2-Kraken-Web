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
use App\Service\Utils\FunctionPayments;
use Weishaypt\EnotIo\Facades\EnotIo;
use App\Http\Requests\EnotIoStoreRequest;
use App\Service\Payments\IPaymentsService;
use App\Service\ProxySqlL2Server\ProxySqlServer;
use App\Service\Registration\Support\SupportFuncReg;
use App\Models\Accounts_expansion;
use App\Providers\Events\L2AddItem;


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
                
                $model_order = FunctionPayments::createOrders($sum , "init" , $char_name , $accounts_expansion->id , now() , now() , $server_id , $accounts_expansion->login );
                $model_order->save();
            
                
                $url = $this->paymentsService->getPayUrlRequestOldEnot($sum , $model_order->id);
                return $this->getUrlWeb($url);
            }
            else{
                info("paymentUser>>>> Fail! not found account_expansion");
                return FunctionSupport::getErrorJson(Lang::get('validation.payments_char_name'), Lang::get('validation.payments_char_name'));
            }
      
          
        }

        return FunctionSupport::getErrorJson(Lang::get('validation.enot_url_error'), Lang::get('validation.enot_url_error'));
       
    }

 
    

    private function getAccountsExpansionId($server_id , $list_servers , $char_name){
        $developer_id = FunctionSupport::getDeveloperId($server_id , $list_servers);
        if( $developer_id != -1){
            $this->proxy = new ProxySqlServer($developer_id);
            return $this->proxy->getAccountsExpansionByCharName(FunctionSupport::getModelAccountDb($server_id , $list_servers),  FunctionSupport::getModelCharactersDb($server_id , $list_servers), $char_name);
        }
    }
    
  
    private function getUrlWeb($url){
        if (!empty($url)) {
            return response()->json(['success'=>$url]);
        }

        return FunctionSupport::getErrorJson(Lang::get('validation.enot_url_error'), Lang::get('validation.enot_url_error'));
    }
       


    public function index()
    {
        info("use EnotIoController >>>> l2index");

        return view('page_payments' , ['arrayServersOnlyNameAndId' => FunctionSupport::getServerOnlyNameAndId($this->list_servers) , 'arrayPaymentsOnlyNameAndId' => FunctionPayments::getAllPaymentsNameAndId($this->list_payments)]);
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
       // info("use EnotIoController >>>> searchOrder: orderId");
        //info($order_id);
        //info("use EnotIoController >>>> enter request data");
        //info($request);
        $order = OrderEnot::where('id', $order_id)->first();

        if($order) {
           // info("use EnotIoController >>>> access searchOrder: orderId");
            $order['sum'] = $order->sum;

            // If your field can be `paid` you can set them like string
            $order['status'] = Config::get('lineage2.server.order_status_found');

            // Else your field doesn` has value like 'paid', you can change this value
            $order['status'] = ('1' == $order['status']) ? 'paid' : false;
           // info("use EnotIoController >>>> save access return order");
            return $order;
        }

         info("use EnotIoController >>>> not access searchOrder: orderId");
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

        $order->status = Config::get('lineage2.server.order_status_paid');
        $order->save();

        //Отправляем сообщение слушателю, что нужно добавить итем по выполненному платежу!
        event(new L2AddItem($order));

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