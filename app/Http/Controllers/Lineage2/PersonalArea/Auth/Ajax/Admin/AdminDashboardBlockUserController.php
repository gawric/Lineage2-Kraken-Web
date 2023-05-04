<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\AdminDashboard\IAdminDashboard;

class AdminDashboardBlockUserController extends Controller
{
  
    private $list_servers;
    private $admin_service;
    
    public function __construct(IAdminDashboard $admin_service)
    {
        $this->admin_service = $admin_service;
        $this->list_servers = Config::get('lineage2.server.list_server');
    }

    //adminDashboard/block?accountId=2 как пример
    public function index(Request $request)
    {
        $validated = $request->validate([
            'accountId' => 'required|integer|max:1000',
        ]);

        $account_expansion_id = $this->getData("accountId", $validated);
        try 
        {
            $this->admin_service->blockAccountExpansionAndAllAccounts($account_expansion_id);
        } catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>'']);
        }
    }

    public function getData($name , $validated ) : string {
        return $validated[$name];
    }
   
}