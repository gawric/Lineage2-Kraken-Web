<?php

namespace App\Service\Registration\Support;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Models\Server\ServerAccounts;
 use Illuminate\Support\Facades\Hash;
 use Config;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;

     class ChangeL2Password
     {

        private $list_servers;


        public function __construct() {
            $this->list_servers = Config::get('lineage2.server.list_server');
        }
     


        public function change($login , $new_pasword){
            $temp_array_accounts = $this->getAllAccountsModel($this->list_servers);
            //пока мы отключаем данную функцию т.к изменилась архитектура
            //теперь пароль от учетки не равен паролю от игрового аккаунта
            //менять пароль от игрового аккаунта возможно будет только из личного кабинета

            //$this->sqlChange($temp_array_accounts , $login , $new_pasword);
           // dd($temp_array_accounts);
        }

        //Данная функция изменяет пароль на всех серверах если находит нужный нам логин
        //Конфликта не должно быть т.к при регистрации мы не проверяем какой именно сервер испольуется для регистрации
        //Мы регистрируем общую учетку по сайту Accounts_Expansion
        //После этого регистрируем в базе сервера в таблице Accounts
        private function sqlChange($temp_array_accounts , $login , $new_pasword){
            foreach($temp_array_accounts  as $accounts_model){

                $collectionsModel = $this->getSqlModel($login , $accounts_model);

                if(isset($collectionsModel)){
                    $searchModel= $collectionsModel->first();
                    $searchModel['password'] = $this->convertPassword($new_pasword);
                    $searchModel->save();
                }
                
            }
        }

        private function getSqlModel($login , $accounts_model){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['login', '=', $login]]);
            return $accounts_model::filter($filtersPk)->get();
        }
            //приходиться заменять 2y на 2a т.к в серверах old salt version
        private function convertPassword($password): string {
                return str_replace('$2y', '$2a', $password);
        }

        private function getAllAccountsModel($list_servers):array {
             $temp = [];
             $this->addTempAccountsModel($temp , $list_servers);
            return $temp;
        }

        private function addTempAccountsModel(&$temp , $list_servers):void{
            foreach ($list_servers as $item) {
                array_push($temp, $item['accounts_db_model']);
            }
        }

     }
?>