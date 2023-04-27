<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\PersonalArea\Dashboard\DashboardChars;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\AdminDashboard\IAdminDashboard;
 use App\Models\Accounts_expansion;

class AdminDashboardController extends Controller
{

    private $list_servers;
    private $admin_service;
    

    public function __construct(IAdminDashboard $admin_service)
    {
        $this->admin_service = $admin_service;
        $this->list_servers = Config::get('lineage2.server.list_server');
    }

    
    public function index()
    {
        
        $array_admindashboard = $this->admin_service->getListAllInfoAdminDashboard(Accounts_expansion::all());
       // dd($array);
       // info("AdminDashboardController>>>>run");
       
        return view('dashboardadmin', ['array_admindashboard' => $array_admindashboard]);
    }
   
}