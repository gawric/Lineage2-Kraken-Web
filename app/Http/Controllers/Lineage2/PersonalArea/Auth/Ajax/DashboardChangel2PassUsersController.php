<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionSupport;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Http\Requests\Auth\DashboardChangel2PassUsersStoreRequest;
 use App\Service\PersonalArea\Dashboard\Dashboard;

class DashboardChangel2PassUsersController extends Controller
{
   
    private $list_server;
    private Dashboard $serviceDashboard;

    public function __construct()
    {
        $this->serviceDashboard = new Dashboard();
        $this->list_server = Config::get('lineage2.server.list_server');
    }


    //login
    //server_id
    //old_password
    //password
    //password_confirmed
    public function changeAjaxPassL2User(DashboardChangel2PassUsersStoreRequest $request)
    {
        //info("test endpount changePassL2User");
        $validated = $request->validated();
        //info($validated);

        $account_name = $this->getData("login" , $validated );
        $old_password = $this->getData("old_password" , $validated );
        $new_password = $this->getData("password" , $validated );
        $server_id = $this->getData("server_id" , $validated );

        try {
            $this->serviceDashboard->changePasswordToAccounts($account_name , $old_password, $new_password , $server_id);
        } catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>'']);
        }

       

        return Response::json(['success'=>Lang::get('messages.lk_change_password_accounts_succes') , 'result'=>'']);
    }

    public function getData($name , $validated ) : string {
        return $validated["$name"];
    }


   
   
}