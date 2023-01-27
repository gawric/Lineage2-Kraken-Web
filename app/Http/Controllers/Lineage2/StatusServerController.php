<?php
  
namespace App\Http\Controllers\Lineage2;
use App\Http\Controllers\Controller;
use Response;
  
use Illuminate\Http\Request;
use App;
use Config;
use App\Service\Status\StatusServer;
use App\Models\InfoServer;


class StatusServerController extends Controller
{

    public function __construct()
    {

    }

    public function data(Request $request)
    {
        $list_server = Config::get('lineage2.server.list_server');
        $finishlist = [];
        foreach (InfoServer::all() as $info) {
            $servernamearr = $this->getNameByServerId($list_server , $info['server_id']);
            $server_name = $this->getNameArr($servernamearr);
            $server_info = $this->createHttpInfoModel($info['id'] , $server_name , $info['server_id'] , $info['status']  , $info['online']  , $info['last_update_at']  , $info['updated_at'] , $info['created_at']);
            array_push($finishlist, $server_info);
        }
 
        return Response::json($finishlist);
    }

    private function getNameByServerId($list_server , $server_id){
       return array_filter($list_server,function($v) use ($server_id) {
            if($v['id'] == $server_id){
                return $v['name'];
            }
          });
       
    }

    private function getNameArr($arr){
        if(count($arr) > 0){
            $firstKey = array_key_first($arr);
            return $arr[$firstKey]['name'];
        }

        return "";
    }

    private function createHttpInfoModel($id , $name , $server_id , $status , $online , $last_update_at , $updated_at , $created_at){
        return [
            'id'=> $id,
            'name'=> $name,
            'server_id'=> $server_id,
            'status'=> $status,
            'count_online' => $online,
            'last_update_at' => $last_update_at,
            'updated_at' => $updated_at,
            'created_at' => $updated_at
        ];
    }
}