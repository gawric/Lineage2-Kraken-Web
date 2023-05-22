<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\AdminDashboard\IAdminDashboard;
 use App\Http\Requests\Auth\AdminDashboardBlockUserStoreRequest;
 use App\Service\Utils\FunctionOtherUser;
 use App\Service\Utils\FunctionSupport;



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

     //Реализация блокировки отдельного аккаунта, а не всей учетки!
     //adminDashboard/block_user_singl_account?accountId=2&accountname="gawric" как пример
    public function singl(AdminDashboardBlockUserStoreRequest $request)
    {
     
         $validated = $request->validated();

         $account_expansion_id = $this->getData("accountId", $validated);
         $l2accountname = $this->getData("accountname", $validated);
         $server_name = $this->getData("server_name", $validated);

         try 
         {
             $search_user = FunctionOtherUser::getUserById($account_expansion_id);



             if(isset($search_user)){
 
                $search_server_id = FunctionSupport::getServerNameToServerId($this->list_servers , $server_name);
                //[{"id":5,"accounts_expansion_id":2,"server_id":3,"account_name":"gawric"}]  пример
                $search_l2_account = $search_user->accountsServerFilterByServerIdAndL2Login($search_server_id , $l2accountname)->get();
 
                 if(isset($search_l2_account)){
                     $this->admin_service->blockAllAccountsServer($search_l2_account);
                     return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'result'=>'']); 
                 }  
             }

             return response()->json(['errors' => Lang::get('messages.admin_use_all_accounts_error_by_id'),], 422);
         } 
         catch (ModelNotFoundException $exception) {
             return Response::json(['error'=>$exception->getMessage() , 'result'=>'']);
         }
    }

    public function getData($name , $validated ) : string {
        return $validated[$name];
    }
   
}