<?php
  
namespace App\Http\Controllers\Lineage2;
use App\Http\Controllers\Controller;
use Response;
  
use Illuminate\Http\Request;
use App;
use Config;
use Validator;
use Lang;
use App\Service\Status\StatusServer;
use App\Service\Info\ServerStats;


class StatisticServerController extends Controller
{

    private $list_server;
    private $top_count;
    private $stat;
    private $arrayNameServer;
    private $arrayStaticsId;

    public function __construct()
    {
        $this->list_server = Config::get('lineage2.server.list_server');
        $this->top_count = Config::get('lineage2.server.top_count');
        $this->stat  = new ServerStats();
        $this->arrayStaticsId = [['id'=>'1', 'name'=>'Топ Пк'],['id'=>'2', 'name'=>'Топ Пвп']];
    }

    public function index()
    {
        
        return view('l2page_statistic', ['arrayNameServers' => $this->getServerNameOnly($this->list_server) , 'arrayNameStatistic' => [$this->arrayStaticsId]]);
    }

    public function dataPk(Request $request , $id)
    {
        $validator =  $this->valid($id);

        if ($validator->fails()) {
            return $this->getErrorJson();
        }
    
        return Response::json($this->stat->getDataPk($id));
    }

    public function dataPvp(Request $request , $id)
    {
        $validator =  $this->valid($id);

        if ($validator->fails()) {
            return $this->getErrorJson();
        }

        return Response::json($this->stat->getDataPvp($id));
    }

    
    private function getServerNameOnly($list_servers){
        $temp = [];
        if (isset($list_servers)) {
            foreach($list_servers as $value){
                $this->addArray($temp , $value);
            }
        }
        return $temp;
    }

    private function addArray(&$temp , $value){
        array_push($temp , $value['id']);
    }


    private function getErrorJson(){
        return response()->json([
            'errors' => Lang::get('validation.enter_server_db'),
            'message'=> Lang::get('validation.enter_server_db'),
        ], 422);
    }


    private function valid($id){
        $validator = Validator::make(['id' => $id], [
            'id' => 'integer|max:5'
          ]);
      
          return $validator;
    }

}