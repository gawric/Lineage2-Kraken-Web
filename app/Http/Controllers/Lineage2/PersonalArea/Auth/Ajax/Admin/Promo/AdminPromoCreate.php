<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Promo;

 use App\Http\Controllers\Controller;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\Utils\FunctionSupport;


class AdminPromoCreate extends Controller
{
    private $tables_db_payments;


    public function __construct()
    {
        $this->tables_db_payments = Config::get('lineage2.server.support_payments_tables');

    }

    ///adminPayments/filter?arrayfil[]=val1&foo[]=val2&foo[]=val3
    public function create(Request $request)
    {
        $validator = $request->validate([
            'itemsnumber' => 'required|integer|max:1000',
            'itemspromonumber' => 'required|integer|max:1000',
            'selectitem' => 'required|integer',
        ]);

        $itemsnumber = FunctionSupport::getDataVariable("itemsnumber" , $validator);
        $itemspromonumber = FunctionSupport::getDataVariable("itemspromonumber" , $validator);
        $selectitem = FunctionSupport::getDataVariable("selectitem" , $validator);

        info("Hello AdminPromoCreate");
 
        try 
        {
            if(isset($filterArrayOrders)){
                return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'data_result'=>$data_result]); 
            }

            return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'data_result'=>[]]); 

        }
         catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>[]]);
        }
    }
   

  
}