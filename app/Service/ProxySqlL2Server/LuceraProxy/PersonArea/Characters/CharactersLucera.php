<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy\PersonArea\Characters;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateCharactersSql;
 use Illuminate\Database\Eloquent\ModelNotFoundException;
 use Lang;
 use App\Models\Temp\InfoDashboard;
 use App\Service\Utils\FunctionAuthUser;
 use App\Service\Utils\FunctionSupport;
  
    class CharactersLucera extends AcisTemplateCharactersSql {
        public function getAllCharsLucera($server_name , $auth_user_id , $modelCharactersDb , $server_id){
            info("use characters to lucera");
            $list_accounts_name = FunctionAuthUser::getAccountsUserByServerId($server_id)->get(['account_name']);
          
            $dataOr = $this->createWhereOr($list_accounts_name);
            $resultArr = $this->getAllCharsToArrayName($modelCharactersDb , $dataOr);
            $listModel = $this->forEachResut($resultArr , $server_name);

            return $listModel;
        }

        private function forEachResut($resultArr , $server_name){
            $id = 0;
            $temp = [];
            foreach($resultArr as $character_row){
                $model = $this->createModel( $id++, $character_row['char_name'] , $character_row['account_name'], $character_row['level'] , "clan_name" , $character_row['pvpkills'] , $character_row['pkkills'] , $character_row['lastAccess'] , $server_name , $character_row['online']);
                array_push($temp ,  $model );
            }

            return $temp;
        }
        private function createModel($id , $char_name , $account_name , $lvl , $clan_name , $pvp , $pk , $last_data , $server_name , $online){
            return FunctionSupport::createModelInfoDashBoardChars($id , $char_name , $account_name , $lvl , $clan_name , $pvp , $pk , $last_data , $server_name , $online);
        }
        //field - поле в таблице Characters сервера
        //list_accounts_name - столбик таблицы из базы laravel c фильтром по серверу
        private function createWhereOr($list_accounts_name){
            $temp = [];
            foreach($list_accounts_name as $item){
                $account_name = $item['account_name'];
                $arrWhere = ['field' =>'account_name', 'comparison'=>'=', 'data'=>$account_name];
                array_push($temp , $arrWhere);
            }

            return $temp;
        }


    }
?>