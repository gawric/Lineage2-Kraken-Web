<?php

   namespace App\Service\Registration\Support;

    use Config;
    use Log;
    use Lang;
   
    use App\Models\Accounts_expansion;

     class SupportFuncReg
     {

        private $arr;

        public function __construct()
        {
            $this->arr=[];
        }

        
        public function getErrorJson(){
            return response()->json([
                'errors' => Lang::get('validation.enter_server_db'),
                'message'=> Lang::get('validation.enter_server_db'),
            ], 422);
    
        }
        
        public function checkModelAccountDb($modelAccountDb){
            if(!empty($modelAccountDb)) {
                return true;
            }
            return false;
        }

        public function save($service_reg , $modelAccountDb , $login , $password , $server_id , $email) : Accounts_expansion{
            if(!empty($modelAccountDb)) {
                    //info("Run save db $modelAccountDb");
                   $service_reg->saveAS($login , $password , $modelAccountDb);
                   return $user_account_expan =  $service_reg->saveAE($email , $login , $server_id , $password);
            }
          return new Accounts_expansion();
        }
        public function getModelAccountDb($arr_item):string{
           // info(count($arr_item));
            if(isset($arr_item) and count($arr_item) == 1){
                foreach ($arr_item as &$value) {
                   return $value['accounts_db_model'];
                }
            }
            return "";
        }
    
        public function getData($name , $validated ) : string {
            return $validated["$name"];
        }
      
        public function getServerName($list_server) : void{
            if(isset($list_server) and count($list_server) > 0){
                array_walk($list_server, "self::getName");
            }
        }
        public function getServerItemById($list_server , $server_id) : array{
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
    
        public function getName(&$item, $key)
        {  
            array_push($this->arr ,[$item["name"] , $item["id"]]);
        }

        public function getResultServerName():array{
            return $this->arr;
        }

     }
?>