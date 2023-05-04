<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\AdminDashboard\IAdminDashboard;
 use App\Models\Accounts_expansion;
 
class AdminDashboardPaginationController extends Controller
{
  
    private $list_servers;
    private $admin_service;
    private $count_rows;

    public function __construct(IAdminDashboard $admin_service)
    {
        $this->admin_service = $admin_service;
        $this->list_servers = Config::get('lineage2.server.list_server');
        $this->count_rows = Config::get('lineage2.server.top_count_dashboard');
    }

   // /adminDashboard/users?page=2 как пример
   public function page(Request $request){
      

        $this->validate($request, [
            'page' => 'required|integer|max:1000',
        ]);

        $data_pages = $this->getPage($this->count_rows);
        $array_admindashboard = $this->getInfoDataAccounts($data_pages);
   

        $data_result_json = $this->unlockedData($data_pages);
        $data_result_json->data = $array_admindashboard;
    
        return $data_result_json;
    }

      //вспомогательные
    private function getPage($count_rows){
        return Accounts_expansion::paginate($count_rows);
    }

    private function getInfoDataAccounts($data_pages){
        return $this->admin_service->getListAllInfoAdminDashboard($data_pages);
    }

    private function unlockedData($data_pages){
        $data = json_encode($data_pages);
        $data_result = json_decode($data);
        return $data_result;
    }
   
}