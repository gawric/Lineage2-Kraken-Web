<?php

 namespace App\Service\PersonalArea\AdminPromo;

   
 use Config;
 use App\Models\Promo;
 use App\Service\Utils\FunctionSupport;
 use App\Service\Utils\FunctionAuthUser;
 use App\Service\PersonalArea\AdminPromo\Support\GeneratedPromoCodes;
 use App\Service\PersonalArea\AdminPromo\Support\SqlSupport;
 use App\Models\Accounts_server_id;
 use App\Providers\Events\L2AddArrayItemsAjax;
 use Illuminate\Database\Eloquent\ModelNotFoundException;
 use Lang;

    class AdminPromo implements IAdminPromo
    {

        private $list_server;
        private GeneratedPromoCodes $generated;
        private SqlSupport $sql_support;


        public function __construct() {
            $this->list_server = Config::get('lineage2.server.list_server');
           // $this->tables_db_payments = Config::get('lineage2.server.coin_payments');
            $this->generated = new GeneratedPromoCodes();
            $this->sql_support = new SqlSupport();
        }
        //itemsnumber - сколько выдать col
        //itemspromonumber - сколько сгенерировать кодов
        //selectitem - какой выдать итем
        public function createPromoCodes($itemsnumber , $itemspromonumber , $selectitem) : array{
            $result =$this->generated->generate_coupons($itemspromonumber, 15 , 'XYZ-');
            $arrayPromoCodes = array_unique($result);

            return $this->sql_support->save($arrayPromoCodes , FunctionAuthUser::getAuthLogin() , $selectitem , $itemsnumber);
        }

        public function getAllPromoCodes(): array{
            return $this->sql_support->getAllRomo()->toArray();
        }

        public function activatePromoCode(string $account_name , string $char_name , int $server_id , string $promo_code){
            $collectionPromoCode = $this->sql_support->findCode($promo_code);

            if(isset($collectionPromoCode) and $collectionPromoCode->isNotEmpty()){
                $promo_code_model = $collectionPromoCode->first();
               
                if(!$promo_code_model->is_used){

                    $promo_id = $promo_code_model->id;
                    $promo_count = $promo_code_model->count;
                    $promo_item_id = $promo_code_model->item_id;
    
                    //возвращает  Accounts_server_id 
                    $collectionAccounts = $this->sql_support->findAccountServerId($account_name , $server_id);
    
                    if(isset($collectionAccounts) and $collectionAccounts->isNotEmpty()){
                        $account_server_id = $collectionAccounts->first();
                        event(new L2AddArrayItemsAjax($this->createL2ArrayItems($char_name , $promo_count ,$promo_item_id , FunctionSupport::getServerNameById($server_id , $this->list_server))));
                        
                        $promo_used = $this->sql_support->createPromoUsed($char_name , $account_server_id->id , $account_server_id->accounts_expansion_id , $promo_id);


                        $promo_code_model = $this->setStatusPromo($promo_code_model , true);
                        $this->saveStatusPromo($promo_code_model);
                        $this->savePromo_used($promo_used);

                        return $promo_used;
                    }
                }
                
                throw new ModelNotFoundException(Lang::get('messages.lk_table_dashboardchars_promo_dialog_error_active')  . $promo_code);
                
            }

            throw new ModelNotFoundException(Lang::get('messages.lk_table_dashboardchars_promo_dialog_error_not_found')  . $promo_code);

        }

        private function createL2ArrayItems($char_name , $count , $item_id , $server_name){
            return [['char_name'=>$char_name , 'count'=>$count , 'item_id'=>$item_id , 'server_name'=>$server_name ]];
        }

        private function setStatusPromo($promo_code_model , $is_used){
            $promo_code_model->is_used = $is_used;
            return $promo_code_model;
        }

        private function saveStatusPromo($promo_code_model){
            $promo_code_model->save();
        }

        private function savePromo_used($promo_used){
            $promo_used->save();
        }

        

      
    }
?>