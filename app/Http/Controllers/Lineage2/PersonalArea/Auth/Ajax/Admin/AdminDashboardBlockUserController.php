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
            $block_account_expansion = $this->admin_service->blockAccountExpansion($account_expansion_id);

            if(isset($block_account_expansion)){

                $all_accounts_server = $block_account_expansion->accounts_server_id;

                if(isset($all_accounts_server)){
                    $this->admin_service->blockAllAccountsServer($all_accounts_server);
                }
                
                return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'result'=>'']); 
            }
        } catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>'']);
        }
    }

     //adminDashboard/block_user_singl_account?accountId=2&accountname="gawric" как пример
     public function singl(Request $request)
     {
         $validated = $request->validate([
             'accountId' => 'required|integer|max:1000',
             'accountname' => 'required|string|max:50',
             'servername' => 'required|string|max:25',
         ]);
 
         $account_expansion_id = $this->getData("accountId", $validated);
         $l2accountname = $this->getData("accountname", $validated);
         $servername = $this->getData("accountname", $validated);
         try 
         {
             $search_user = FunctionOtherUser::getUserById($account_expansion_id);
             $all_accounts_server = $search_user->accounts_server_id;

             if(isset($block_account_expansion)){
 
                // $all_accounts_server = $block_account_expansion->accounts_server_id;
 
                 if(isset($all_accounts_server)){
                //     $this->admin_service->blockAllAccountsServer($all_accounts_server);
                 }
                 
                 return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'result'=>'']); 
             }
         } catch (ModelNotFoundException $exception) {
             return Response::json(['error'=>$exception->getMessage() , 'result'=>'']);
         }
     }

    public function getData($name , $validated ) : string {
        return $validated[$name];
    }
   
}