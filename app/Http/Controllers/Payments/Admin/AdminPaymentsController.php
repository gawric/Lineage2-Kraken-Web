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
 use App\Service\Utils\FunctionPaginate;

class AdminPaymentsController extends Controller
{

    private $list_servers;
    private $tables_db_payments;
    private $payments_admin_service;
    private $filter_items;
    private $count;

    public function __construct()
    {

        $this->list_servers = Config::get('lineage2.server.list_server');
        $this->tables_db_payments = Config::get('lineage2.server.support_payments_tables');
        $this->count = Config::get('lineage2.server.top_count_payments');
        $this->payments_admin_service = new PaymentsAdminService();
        $this->filter_items = Config::get('lineage2.server.support_payments_filters');
    }

    //return view('l2page_statistic', ['arrayNameServers' => $this->getServerNameOnly($this->list_server) , 'arrayNameStatistic' => [$this->arrayStaticsId]]);
    public function index()
    {
        $orders = $this->payments_admin_service->getDataAllOrdersPayments($this->tables_db_payments);
        $data_pages = FunctionPaginate::paginate($orders,2);
        $data_pages->withPath('/adminPayments/orders');
        $data_result = FunctionPaginate::unlockedData($data_pages);

       // dd($data_result);
        return view('dashboardadminpayments' , ['arrayOrders' => $orders , 'filter_items' => $this->filter_items , 'data_result' => $data_result]);
    }


}