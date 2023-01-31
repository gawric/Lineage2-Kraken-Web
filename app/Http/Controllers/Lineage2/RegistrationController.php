<?php
  
namespace App\Http\Controllers\Lineage2;

use App\Http\Controllers\Controller;
use Response;
  
use Illuminate\Http\Request;
use App;
use Config;
use Log;



class RegistrationController extends Controller
{

    private $arr;

    public function __construct()
    {
        $this->arr=[];
    }

    public function index()
    {
        $list_server = Config::get('lineage2.server.list_server');
        $this->getServerName($list_server);
        return view('l2page_registration' , ['listServerName' => $this->arr]);
    }

    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
          
        Log::info($input);
     
        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
  
    private function getServerName($list_server){
        if(isset($list_server) and count($list_server) > 0){
            array_walk($list_server, "self::getName");
        }
    }
    private function getName(&$item, $key)
    {  
        array_push($this->arr ,[$item["name"] , $item["id"]]);
    }
   
}