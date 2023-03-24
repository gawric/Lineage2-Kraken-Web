<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionSupport;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Http\Requests\Auth\DashboardCreateL2UsersStoreRequest;
 use App\Service\Utils\FunctionAuthUser;
 use App\Service\PersonalArea\Dashboard\Dashboard;
 use App\Models\Temp\InfoDashboard;

class DashboardCreateL2UsersController extends Controller
{
   
    private $list_server;
    private Dashboard $serviceDashboard;

    public function __construct()
    {
        $this->serviceDashboard = new Dashboard();
        $this->list_server = Config::get('lineage2.server.list_server');
    }

    //'login' => 'required|string|max:25',
    //'server_id' => 'required|integer|max:10',
    //'password' => 'required|string|min:7|max:25',
    public function addAjaxL2User(DashboardCreateL2UsersStoreRequest $request)
    {
        info("test endpount adduser");
        $validated = $request->validated();
      
        $account_name = $this->getData("login" , $validated );
        $password = $this->getData("password" , $validated );
        $server_id = $this->getData("server_id" , $validated );
        $auth_user_id = FunctionAuthUser::getAuthUserId();

        try {
           
            $info = $this->serviceDashboard->createAccountAjax($auth_user_id , $account_name , $password , $server_id);

        } catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>'']);
        }

        return Response::json(['success'=>Lang::get('messages.lk_change_password_accounts_succes') , 'result'=>$info]);
    }

    public function getData($name , $validated ) : string {
        return $validated["$name"];
    }

   
   
}