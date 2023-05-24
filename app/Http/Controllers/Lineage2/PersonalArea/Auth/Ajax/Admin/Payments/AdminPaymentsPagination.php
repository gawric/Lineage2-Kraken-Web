<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Payments;

 use App\Http\Controllers\Controller;
 use App\Service\PersonalArea\Dashboard\DashboardChars;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\Payments\Admin\PaymentsAdminService;
 use App\Service\Utils\FunctionPaginate;

class AdminPaymentsPagination extends Controller
{
    private $tables_db_payments;
    private $payments_admin_service;
    private $count;

    public function __construct()
    {
        $this->tables_db_payments = Config::get('lineage2.server.support_paymonts_tables');
        $this->count = Config::get('lineage2.server.top_count_payments');
        $this->payments_admin_service = new PaymentsAdminService();
    }

    // /adminPayments/orders?page=2 как пример
    public function page(Request $request)
    {
        $this->validate($request, [
            'page' => 'required|integer|max:1000',
        ]);


        $orders = $this->payments_admin_service->getDataAllOrdersPayments($this->tables_db_payments);
        $data_pages = FunctionPaginate::paginate($orders , $this->count);
        $data_pages->withPath('/adminPayments/orders');
        $data_result = FunctionPaginate::unlockedData($data_pages);

        try 
        {
            if(is_array($orders) and count($orders) > 0){
                return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'data_result'=>$data_result]); 
            }

            return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'data_result'=>'']); 

        }
         catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>'']);
        }
    }
   

  
}