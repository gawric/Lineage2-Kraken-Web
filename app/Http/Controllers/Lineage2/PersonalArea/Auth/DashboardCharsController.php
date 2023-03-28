<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth;

 use App\Http\Controllers\Controller;
 use App\Service\PersonalArea\Dashboard\DashboardChars;
 use App\Service\Utils\FunctionSupport;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 

class DashboardCharsController extends Controller
{
    private DashboardChars $serviceDashboardChars;
    private $list_server;

    public function __construct()
    {
        $this->serviceDashboardChars = new DashboardChars();
        $this->list_server = Config::get('lineage2.server.list_server');
    }

    //return view('l2page_statistic', ['arrayNameServers' => $this->getServerNameOnly($this->list_server) , 'arrayNameStatistic' => [$this->arrayStaticsId]]);
    public function index()
    {
        return view('dashboardchars');
    }
   
}