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

class AdminPromoInfo extends Controller
{

    private $servicePromo;

    public function __construct(IAdminPromo $servicePromo)
    {

        $this->servicePromo = $servicePromo;
    }

    ///adminPromo/promo_info?code=XYZ-RELMPGUBIAPZXQK
    public function info(Request $request)
    {
        $validator = $this->validate($request, [
            'code' => 'required|string|max:25',
        ]);

        $code = FunctionSupport::getDataVariable("code" , $validator);

 
        try 
        {
            info("request info promo");
            info($code);
            $infoPromo = $this->servicePromo->getInfoPromoCodes($code);

            if(isset($resultArrayPromo)){
                return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'data_result'=>$data_result]); 
            }

            return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'data_result'=>[]]); 

        }
         catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>[]]);
        }
    }
   

  
}