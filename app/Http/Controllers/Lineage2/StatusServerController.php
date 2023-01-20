<?php
  
namespace App\Http\Controllers\Lineage2;
use App\Http\Controllers\Controller;
use Response;
  
use Illuminate\Http\Request;
use App;
use Config;
use App\Service\Status\StatusServer;


class StatusServerController extends Controller
{
    protected StatusServer $ss;

                //'id'=>'1',
               // 'name'=>'X50 Nightmare',
                //'ip'=>'127.0.0.1',
                ///'login_port'=>'2106',
               // 'game_port' =>'7777',
               // 'status' => 'offline',
               // 'count_online' => 0
    public function __construct()
    {
       $timeout = Config::get('lineage2.server.timeout_socket');
       $this->ss = new StatusServer($timeout);
    }

    public function data(Request $request)
    {
        
        $list_server = Config::get('lineage2.server.list_server');
        $complete_server = $this->getStatusServers($list_server);
       // dd($complete_sever);
        return Response::json($complete_server);
    }

    function getStatusServers($list_server){
        
        $complete_sever =[];
        foreach ($list_server as $item) {

            $id = $item["id"];
            $name = $item["name"];
            $ip = $item["ip"];
            $login_port = $item["login_port"];
            $game_port = $item["game_port"];
            $status = $item["status"];
            $count_online = $item["count_online"];
 
           
             $data = $this->getData($ip , $login_port , $game_port);
             $item["status"] = $data;

             array_push($complete_sever, $item);
         }

         return $complete_sever;
    }

    function getData($ip , $login_port , $game_port){
        return $this->ss->getOnline($ip , $login_port , $game_port);
    }
}