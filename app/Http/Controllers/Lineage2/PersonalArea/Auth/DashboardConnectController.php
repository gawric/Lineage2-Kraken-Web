<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth;

 use App\Http\Controllers\Controller;
 use App\Service\PersonalArea\Dashboard\DashboardChars;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\AdminConnect\IAdminConnect;

class DashboardConnectController extends Controller
{
    
    private $list_servers;
    private IAdminConnect $admin_service;

    public function __construct(IAdminConnect $admin_service)
    {
        $this->admin_service = $admin_service;
        $this->list_servers = Config::get('lineage2.server.list_server');
    }

    
    public function index()
    {   //getDataIpAddress внутри получает авторизованного юзера и через связь 1 ко многим получает все ип адреса
        $result = $this->admin_service->getDataIpAddress();
        $finish_result = $result->take(5);

       
        return view('dashboardconnect', ['finish_result' => $finish_result ]);
    }
   
}