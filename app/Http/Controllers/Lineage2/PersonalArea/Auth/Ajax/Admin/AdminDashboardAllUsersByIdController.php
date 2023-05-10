<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\AdminDashboard\IAdminDashboard;
 use App\Service\PersonalArea\Dashboard\DashboardChars;
 
class AdminDashboardAllUsersByIdController extends Controller
{
  
    private $list_servers;
    private DashboardChars $serviceDashboardChars;

    public function __construct()
    {
        $this->list_servers = Config::get('lineage2.server.list_server');
        $this->serviceDashboardChars = new DashboardChars();
    }

    //adminDashboard/block?accountId=2 как пример
    public function index(Request $request)
    {
        $validated = $request->validate([
            'accountExpansionId' => 'required|integer|max:1000',
        ]);

        $acccount_expansion_id = $this->getData("accountExpansionId", $validated);

        try 
        {
            info("AdminDashboardAllUsersByIdController>>>> success request ajax! " . $acccount_expansion_id);
            $array_chars_user = $this->serviceDashboardChars->getAllCharsAllServers($this->list_servers , $acccount_expansion_id);
            info($array_chars_user);
            return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'result'=>'']); 
        }
         catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>'']);
        }
    }

    public function getData($name , $validated ) : string {
        return $validated[$name];
    }
   
}