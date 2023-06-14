<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionSupport;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\Dashboard\Dashboard;
 use App\Service\PersonalArea\AdminPromo\IAdminPromo;
 use App\Http\Requests\Auth\DashboardActivatePromoStoreRequest;
 use Illuminate\Database\Eloquent\ModelNotFoundException;


class DashboardActivatePromoUserController extends Controller
{
   
    private $list_server;
    private IAdminPromo $servicePromo;


    public function __construct(IAdminPromo $servicePromo)
    {
        $this->servicePromo = $servicePromo;
        $this->list_server = Config::get('lineage2.server.list_server');

    }



    public function activate(DashboardActivatePromoStoreRequest $request)
    {

        $validated = $request->validated();



        $account_name = FunctionSupport::getDataVariable("account_name" , $validated);
        $char_name = FunctionSupport::getDataVariable("char_name" , $validated);
        $server_name = FunctionSupport::getDataVariable("server_name" , $validated);
        $promo_code = FunctionSupport::getDataVariable("promo_code" , $validated);


        try {

            $server_id = FunctionSupport::getServerNameToServerId($this->list_server , $server_name);
            $promo_used = $this->servicePromo->activatePromoCode($account_name , $char_name , $server_id , $promo_code);

            if(isset($promo_used)){
                    return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'data_result'=>$promo_used]); 
            }
            
        } catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>[]]);
        }

       

        return Response::json(['success'=>Lang::get('messages.lk_change_password_accounts_succes') , 'result'=>[]]);
    }


   
   
}