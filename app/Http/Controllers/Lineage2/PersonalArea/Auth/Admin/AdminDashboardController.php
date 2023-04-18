<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\PersonalArea\Dashboard\DashboardChars;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 

class AdminDashboardController extends Controller
{

    private $list_servers;

    public function __construct()
    {

        $this->list_servers = Config::get('lineage2.server.list_server');
    }

    
    public function index()
    {

        info("AdminDashboardController>>>>run");
       
        return view('dashboardadmin');
    }
   
}