<?php
  
namespace App\Http\Controllers\Payments\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\PersonalArea\Dashboard\DashboardChars;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\Payments\Admin\PaymentsAdminService;

class AdminPaymentsController extends Controller
{

    private $list_servers;
    private $tables_db_payments;
    private $payments_admin_service;
    private $filter_items;
    public function __construct()
    {

        $this->list_servers = Config::get('lineage2.server.list_server');
        $this->tables_db_payments = Config::get('lineage2.server.support_paymonts_tables');
        $this->payments_admin_service = new PaymentsAdminService();
        $this->filter_items = [0 => "По аккаунту" , 1 => "По имени чара" , 2 => "По сервису" , 3 => "По дате"];
    }

    //return view('l2page_statistic', ['arrayNameServers' => $this->getServerNameOnly($this->list_server) , 'arrayNameStatistic' => [$this->arrayStaticsId]]);
    public function index()
    {
        $orders = $this->payments_admin_service->getDataAllOrdersPayments($this->tables_db_payments);

       
        return view('dashboardadminpayments' , ['arrayOrders' => $orders , 'filter_items' => $this->filter_items]);
    }
   
}