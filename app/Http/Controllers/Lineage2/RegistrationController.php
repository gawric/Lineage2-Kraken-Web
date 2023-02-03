<?php
  
namespace App\Http\Controllers\Lineage2;

use App\Http\Controllers\Controller;
use Response;
use App\Http\Requests\RegistrationStoreRequest;
use App\Service\Registration\Registration;

use Illuminate\Http\Request;

use App;
use Config;
use Log;
use Lang;


class RegistrationController extends Controller
{

    private $arr;
    private $list_server;
    private $model_account_db;

    public function __construct()
    {
        $this->arr=[];
        $this->list_server = Config::get('lineage2.server.list_server');
    }
//info(count($arr_item));
    public function index()
    {
        //$list_server = Config::get('lineage2.server.list_server');
        $this->getServerName($this->list_server);
        return view('l2page_registration' , ['listServerName' => $this->arr]);
    }

    public function ajaxRequestPost(RegistrationStoreRequest $request)
    {
        $validated = $request->validated();

 
    
        $service_reg = new Registration();

        $login = $this->getData("login" , $validated );
        $password = $this->getData("password" , $validated );
        $email = $this->getData("email" , $validated );
        $server_id = $this->getData("server_id" , $validated );

        $arr_item = $this->getServerItemById($this->list_server ,  $server_id);
        $modelAccountDb = $this->getModelAccountDb($arr_item);
        //info("Полученные данные в строке $modelAccountDb");
        if(!$this->checkModelAccountDb($modelAccountDb)){
          return $this->getErrorJson();
        }
        
       
        $this->save($service_reg , $modelAccountDb , $login , $password , $server_id , $email);

        return response()->json(['success'=>Lang::get('validation.success')]);
    }

    private function getErrorJson(){
        return response()->json([
            'errors' => Lang::get('validation.enter_server_db'),
            'message'=> Lang::get('validation.enter_server_db'),
        ], 422);

    }
    private function checkModelAccountDb($modelAccountDb){
        if(!empty($modelAccountDb)) {
            return true;
        }
        return false;
    }
    private function save($service_reg , $modelAccountDb , $login , $password , $server_id , $email){
        if(!empty($modelAccountDb)) {
                //info("Run save db $modelAccountDb");
               $service_reg->saveAS($login , $password , $modelAccountDb);
               $service_reg->saveAE($email , $login , $server_id);
        }
      
    }
    private function getModelAccountDb($arr_item):string{
       // info(count($arr_item));
        if(isset($arr_item) and count($arr_item) == 1){
            foreach ($arr_item as &$value) {
               return $value['accounts_db_model'];
            }
        }
        return "";
    }

    private function getData($name , $validated ) : string {
        return $validated["$name"];
    }
  
    private function getServerName($list_server) : void{
        if(isset($list_server) and count($list_server) > 0){
            array_walk($list_server, "self::getName");
        }
    }
    private function getServerItemById($list_server , $server_id) : array{
        if(isset($list_server) and count($list_server) > 0){
           return array_filter($list_server, function($item) use($server_id){
                    //info(count($arr_item));
                    if(strcmp($item['id'], $server_id) == 0){
                        return $item;
                    }
              });
        
        }
        return [];
    }

    private function getName(&$item, $key)
    {  
        array_push($this->arr ,[$item["name"] , $item["id"]]);
    }
   
}