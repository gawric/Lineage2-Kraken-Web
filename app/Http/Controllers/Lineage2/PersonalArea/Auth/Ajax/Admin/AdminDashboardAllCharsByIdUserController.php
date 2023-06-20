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
 use App\Models\Temp\InfoDashboardCharsCoin;
 use App\Service\Utils\FunctionSupport;
 use App\Service\Utils\FunctionPayments;
 use App\Service\Utils\FunctionOtherUser;

class AdminDashboardAllCharsByIdUserController extends Controller
{
  
    private $list_servers;
    private DashboardChars $serviceDashboardChars;
    private $item_id;
    private $array_success_items;


    public function __construct()
    {
        $this->list_servers = Config::get('lineage2.server.list_server');
       // $this->item_id = Config::get('lineage2.server.coin_payments')['coin_of_luck'];
        $this->item_id = FunctionPayments::getPaymentsItemIdByName("coin_of_luck");
        $this->array_success_items = Config::get('lineage2.server.coin_payments');
        $this->serviceDashboardChars = new DashboardChars();
    }

    //adminDashboard/block?accountExpansionId=2 как пример
    public function index(Request $request)
    {
        $validated = $request->validate([
            'accountExpansionId' => 'required|integer|max:1000',
        ]);

        $acccount_expansion_id = $this->getData("accountExpansionId", $validated);

        try 
        {
            $search_user = FunctionOtherUser::getUserById($acccount_expansion_id);

            if(isset($search_user) and !is_array($search_user)){
                $array_chars_user = $this->serviceDashboardChars->getAllCharsAllServers($this->list_servers , $acccount_expansion_id);
                $result = $this->convertArrModel($array_chars_user);
                return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'result'=>$result , 'access_items'=>$this->array_success_items]); 
            }


            return Response::json(['error' => Lang::get('messages.admin_use_all_accounts_error_by_id') , 'result'=>[]], 404);
          
        }
         catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>[]]);
        }
    }

    private function getData($name , $validated ) : string {
        return $validated[$name];
    }

    private function convertArrModel($array_chars_user){
        $temp = [];
        foreach($array_chars_user as $model){
            $convert =new InfoDashboardCharsCoin($model);
            $server_id = FunctionSupport::getServerNameToServerId($this->list_servers , $convert->server_name);
            $count = $this->serviceDashboardChars->getItemByIdCount($server_id , $this->item_id , $convert->char_name , $this->list_servers);
            $convert->col = $count;
            array_push($temp ,  $convert);
        }

        return $temp;
    }
    
   
}