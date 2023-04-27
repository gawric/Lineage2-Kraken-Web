<?php

namespace App\Service\PersonalArea\Dashboard\Support;

use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Models\Temp\InfoDashboard;
use App\Service\Utils\FunctionSupport;
use Lang;

    class SqlSupport
    {
        public function getInfoAllCharacters($list_server , $list_user_server_accounts) : array{
            $finishArray = [];
            $n = 0;
            foreach($list_server as $i =>$serverModel){
                    
  
                
                    $list_user_server_accounts->each(function($current_user_item, $key) use ($serverModel ,&$n , &$finishArray)  {
                       

                        $server_name = $serverModel['name'];
                        $server_id = $serverModel['id'];
                        $server_db_model = $serverModel['server_db_model'];
                        $accounts_db_model = $serverModel['accounts_db_model'];

                        if($current_user_item['server_id'] ==  $server_id){
                            $id_i = $n++;
                            $account_name_current_server = $current_user_item['account_name'];
                            $collect_server_accounts_array = $this->getAccountsCurrentServer($account_name_current_server , $accounts_db_model);

                            if(!$collect_server_accounts_array->isEmpty()){
                               $countCharacter =  $this->getCountCharactersToServer($account_name_current_server , $server_db_model );
                               $lastAccess = $this->getUserCharactersLastAccessServer($account_name_current_server , $server_db_model);
                               $infoDashboard = FunctionSupport::createModelInfoDashBoard($id_i , $account_name_current_server ,  $lastAccess , $countCharacter  , $server_name , $server_id);
                               array_push($finishArray, $infoDashboard );
                               
                            }
                            
                        }
                    });

                    
            }
           // dd($finishArray);
            return  $finishArray;
        } 

        private function getCountCharactersToServer($server_account_name , $server_db_model){
            return  $this->getUserCharactersCurrentServer($server_account_name , $server_db_model);
        }

        private function getAccountsCurrentServer($account_name , $current_account_db_model){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['login', '=', $account_name]]);
            return $current_account_db_model::filter($filtersPk)->get();
        }
        
        private function getUserCharactersCurrentServer($account_name , $server_db_model){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['account_name', '=', $account_name]]);
            return $server_db_model::filter($filtersPk)->get(['account_name'])->count();
        }

        private function getUserCharactersLastAccessServer($account_name , $server_db_model){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['account_name', '=', $account_name]]);
            return $server_db_model::filter($filtersPk)->get(['lastAccess'])->max('lastAccess');
        }

    

      
    }

?>