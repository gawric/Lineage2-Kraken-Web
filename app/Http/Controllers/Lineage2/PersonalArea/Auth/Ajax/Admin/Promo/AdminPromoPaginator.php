<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Promo;

 use App\Http\Controllers\Controller;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\Utils\FunctionSupport;
 use App\Service\PersonalArea\AdminPromo\IAdminPromo;
 use App\Service\Utils\FunctionPaginate;

class AdminPromoPaginator extends Controller
{
    //private $tables_db_payments;
    private $servicePromo;
    private $count;

    public function __construct(IAdminPromo $servicePromo)
    {
        $this->count = Config::get('lineage2.server.top_count_promo');    
        $this->servicePromo = $servicePromo;
    }

    ///adminPayments/filter?arrayfil[]=val1&foo[]=val2&foo[]=val3
    public function page(Request $request)
    {
        $validator = $this->validate($request, [
            'page' => 'required|integer|max:1000',
        ]);

        $page = FunctionSupport::getDataVariable("page" , $validator);

 
        try 
        {
            $resultArrayPromo = $this->servicePromo->getAllPromoCodes();

            if(isset($resultArrayPromo)){

                $data_pages = FunctionPaginate::paginate($resultArrayPromo , $this->count);
                $data_pages->withPath('/adminPromo/promo_filter');
                $data_result = FunctionPaginate::unlockedData($data_pages);

                return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'data_result'=>$data_result]); 
            }

            return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'data_result'=>[]]); 

        }
         catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>[]]);
        }
    }
   

  
}