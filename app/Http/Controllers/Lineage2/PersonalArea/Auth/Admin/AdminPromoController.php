<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionSupport;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\Utils\FunctionPaginate;
 use App\Service\PersonalArea\AdminPromo\IAdminPromo;


class AdminPromoController extends Controller
{


    private $list_access_items;
    private $count;
    private $servicePromo;

    public function __construct(IAdminPromo $servicePromo)
    {
        $this->servicePromo = $servicePromo;
        $this->list_access_items = Config::get('lineage2.server.coin_payments');    
        $this->count = Config::get('lineage2.server.top_count_promo');      
    }

    
    public function index()
    {
        $resultArrayPromo = $this->servicePromo->getAllPromoCodes();

        $data_pages = FunctionPaginate::paginate($resultArrayPromo , $this->count);
        $data_pages->withPath('/adminPromo/promo_filter');
        $data_result = FunctionPaginate::unlockedData($data_pages);

        info($resultArrayPromo);
       return view('dashboardpromo' , ['accessItems' => FunctionSupport::convertAccessItemToBladeArray($this->list_access_items) , 'data_result' => $data_result]) ;
    }




   
}