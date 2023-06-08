<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionSupport;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;



class AdminPromoController extends Controller
{


    private $list_access_items;

    public function __construct()
    {
        $this->list_access_items = Config::get('lineage2.server.coin_payments');      
    }

    
    public function index()
    {

       // dd($this->list_access_items);
       return view('dashboardpromo' , ['accessItems' => FunctionSupport::convertAccessItemToBladeArray($this->list_access_items)]) ;
    }




   
}