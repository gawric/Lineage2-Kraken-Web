<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin;

 use App\Http\Controllers\Controller;

 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\AdminDashboard\IAdminDashboard;
 use App\Service\PersonalArea\Dashboard\DashboardChars;
 use App\Http\Requests\Auth\AdminDashboardAddL2ItemsStoreRequest;
 use App\Providers\Events\L2AddArrayItemsAjax;

class AdminDashboardAddL2ItemsController extends Controller
{
  
    private $list_servers;

    public function __construct()
    {
        $this->list_servers = Config::get('lineage2.server.list_server');
    }


    public function index(AdminDashboardAddL2ItemsStoreRequest $request)
    {

        $valid_array = $request->validated();
        try 
        {
            info("AdminDashboardAllCharsByIdUserController>>>> success request ajax! ");
           // info($validated);
            event(new L2AddArrayItemsAjax($valid_array));

            return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'result'=>'']); 
        }
         catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>'']);
        }
    }


    
   
}