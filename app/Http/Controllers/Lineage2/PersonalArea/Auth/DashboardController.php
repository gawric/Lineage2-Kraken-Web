<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth;

 use App\Http\Controllers\Controller;
 use App\Service\PersonalArea\Dashboard\Dashboard;

class DashboardController extends Controller
{
    private Dashboard $serviceDashboard;

    public function __construct()
    {
        $this->serviceDashboard = new Dashboard();
    }

    //return view('l2page_statistic', ['arrayNameServers' => $this->getServerNameOnly($this->list_server) , 'arrayNameStatistic' => [$this->arrayStaticsId]]);
    public function index()
    {
        $allow_count = $this->serviceDashboard->getAllowedAccountsCount();
        $username = $this->serviceDashboard->getUsernameAuth();
        $arrayInfoDashboard = $this->serviceDashboard->getInfoAccountsServer($username);
   
        return view('dashboard' , ['allow_count' => $allow_count, 'username' => $username, 'arrayInfoDashboard' => $arrayInfoDashboard]);
    }


   
   
}