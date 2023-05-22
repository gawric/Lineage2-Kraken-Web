<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\AdminDashboard\IAdminDashboard;
 use App\Service\Utils\FunctionOtherUser;
 use App\Service\Utils\FunctionSupport;


class AdminDashboardAllAccountsByIdUserController extends Controller
{
  
    private $list_servers;
    private $admin_service;

    public function __construct(IAdminDashboard $admin_service)
    {
        $this->admin_service = $admin_service;
        $this->list_servers = Config::get('lineage2.server.list_server');
    }

    //adminDashboard/all_l2accounts?accountExpansionId=2 как пример
    public function index(Request $request)
    {
        $validated = $request->validate([
            'accountExpansionId' => 'required|integer|max:1000',
        ]);

        $acccount_expansion_id = FunctionSupport::getDataVariable("accountExpansionId" , $validated);
        //$acccount_expansion_id = $this->getData("accountExpansionId", $validated);

        try 
        {
            //info("AdminDashboardAllAccountsByIdUserController>>>> success request ajax! " . $acccount_expansion_id);
                
            $search_user = FunctionOtherUser::getUserById($acccount_expansion_id);
            $all_accounts_server = $search_user->accounts_server_id;
                
            if(isset($all_accounts_server)){
                $arrayModel = $this->admin_service->getListAllL2AccountsByAccountExpansion($all_accounts_server); 

                if(is_array($arrayModel) and count($arrayModel) > 0 ){
                    return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'result'=>$arrayModel]); 
                }


            }

            return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'result'=>[]]); 
                
        }
         catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>'']);
        }
    }


    
   
}