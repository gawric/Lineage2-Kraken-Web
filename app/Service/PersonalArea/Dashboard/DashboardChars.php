<?php

    namespace App\Service\PersonalArea\Dashboard;

    use Config;
    use Auth;
    use App\Service\Utils\FunctionSupport;
  
    use App\Service\ProxySqlL2Server\ProxySqlServer;
    use App\Models\Temp\InfoDashboard;
    
    class DashboardChars implements IDashboard
    {

      //  private $list_server;
        private ProxySqlServer $proxy;
        
        public function __construct() {
            //$this->list_server = Config::get('lineage2.server.list_server');
        }

        //здесь реализация не нужна реализовывается в dashboard
        public function getAllowedAccountsCount() : int{}

       //здесь реализация не нужна реализовывается в dashboard
        public function getUsernameAuth() : string{}

        //здесь реализация не нужна реализовывается в dashboard
        public function createAccountAjax($auth_user_id , $account_name , $password , $server_id): InfoDashboard{}

         //здесь реализация не нужна реализовывается в dashboard
        public function changePasswordToAccounts($account_name , $old_password, $new_password , $server_id):void{}

        public function getAllCharsAllServers($list_servers , $auth_user_id){
            $finishArr = [];
            $id = 0;
            foreach($list_servers as $server){
                $server_id = $server['id'];
                $list_chars = $this->calcData($server_id , $list_servers , $auth_user_id);
                $finishArr = $this->arrayMerge($finishArr, $list_chars);
                $this->setIDItem($list_chars , $id);
            }
            
          
           return  $finishArr;
        }

        public function getItemByIdCount($server_id , $item_id , $char_name , $list_servers){
            $developer_id = FunctionSupport::getDeveloperId($server_id , $list_servers);
            $this->proxy = $this->getProxyServer($developer_id);
            $modelItemsDb = FunctionSupport::getModelOtherDbByName($server_id , $list_servers , "items_db_model");
            $charactersDb = FunctionSupport::getModelCharactersDb($server_id , $list_servers);
            return $this->getItemsCount($modelItemsDb , $charactersDb , $char_name , $item_id);
        }

        private function getItemsCount($modelItemsDb , $charactersDb , $char_name , $item_id){
            $items = $this->proxy->getL2Item($modelItemsDb , $charactersDb , $char_name , $item_id);
          //  info("getItemsCount>>>>");
          //  info($items);
            if(!is_array($items)){
                return $this->isNotEmptyResult($items);
            }
            else{
               info("DashboardChars>>> мы не нашли итемы у юзера " . $char_name . " item_id " . $item_id);
               return 0;
            }
            
        }

        private function isNotEmptyResult($items){
            if(isset($items)){
                if($items->isNotEmpty()){
                    return  $items->sum('count');
                }
            }
            
            return 0;
        }







   
        private function calcData($server_id , $list_servers , $auth_user_id){

            $developer_id = FunctionSupport::getDeveloperId($server_id , $list_servers);
            $this->proxy = $this->getProxyServer($developer_id);
            $modelCharactersDb = FunctionSupport::getModelCharactersDb($server_id , $list_servers);
            $modelClanDataDb = FunctionSupport::getModelClanDataDb($server_id , $list_servers);
            $server_name = FunctionSupport::getServerNameById($server_id , $list_servers);

            $list_chars = $this->proxy->getAllChars($server_name , $auth_user_id , $modelCharactersDb , $server_id);
           // info("DashboardChars>>>>>>>calcData");
           // info($list_chars);
            $this->setNameClanByClanId($list_chars , $modelClanDataDb);
            return $list_chars;
        }

        private function setNameClanByClanId($list_chars , $modelClanDataDb){
            if(isset($list_chars)){
                foreach($list_chars as $char){
                    $unique_clan_id = [$char->clan_name];
                    $all_data = $this->proxy->getClanIdToClanName($unique_clan_id , $modelClanDataDb);
                   // info("Request clan data");
                  //  info($all_data);
                    $this->setClanName($all_data->first() , $char);
                  
                }

            }
           
            
        }

        private function getProxyServer($developer_id){
            return $this->proxy = new ProxySqlServer($developer_id);
        }

        private function setClanName($all_data , $char){
            if(isset($all_data)){
                $char->clan_name = $all_data['clan_name'];
            }else{
                $char->clan_name = "Нет клана";
            }
        }

        private function arrayMerge($finishArr, $list_chars){
            if(isset($list_chars)){
               // info("use merge");
                return array_merge($finishArr, $list_chars);
            }
           return $finishArr;
        }

        private function setIDItem($list_chars , &$id){
            foreach($list_chars as $item){
                $item->id = $id++;
            }
        }
    
    }
?>