<?php

 namespace App\Service\PersonalArea\AdminPromo\Support;

   
 use Config;
 use App\Models\Promo\PromoCodes;
 use App\Service\Utils\FunctionSupport;
 use App\Models\Promo\PromoUsed;
 use App\Models\Accounts_server_id;
 use App\Service\Utils\FunctionOtherUser;

    class SqlSupport
    {


        public function __construct() {

        }

        public function save($arrayPromoCodes , $create_name , $item_id, $count){
            $temp = [];
            foreach($arrayPromoCodes as $code){
                $promo = $this->createPromoModel($code , $create_name , $item_id , $count);
                if(!$this->isExist($code)){
                    $promo->save();
                    array_push($temp,$promo);
                }
            }
            return $temp;
        }

       

        public function getAllRomo(){
            return PromoCodes::all();
        }

        //$table->id();
        //$table->string('code')->unique();
        //$table->string('create_name');
        //$table->integer('item_id');
        //$table->timestamp('created_at');
        //$table->timestamp('updated_at');
        private function createPromoModel(string $code , string $crate_name , int $item_id , int $count){
            $promo = new PromoCodes();
            $promo->code = $code;
            $promo->create_name = $crate_name;
            $promo->item_id = $item_id;
            $promo->count = $count;
            $promo->created_at = now();
            $promo->updated_at = now();
            return $promo;
        }

        public function isExist($code){
            return PromoCodes::select("code")
                        ->where("code", $code)
                        ->exists();
        }

        public function findCode($code){
           return PromoCodes::where('code', $code)->get();
        }

        public function findAccountServerId($account_name , $server_id){
            return FunctionOtherUser::getAccountByAccountNameAndServerId($account_name , $server_id)->get();
        }

        public function createPromoUsed($char_name , $accounts_server_id , $accounts_expansion_id , $promo_id){
            return  $this->createPromousedModel($char_name , $accounts_server_id , $accounts_expansion_id , $promo_id);
        }

       // $table->id();
       // $table->string('char_name');
       // $table->unsignedBigInteger('accounts_server_id');
       // $table->unsignedBigInteger('accounts_expansion_id');
       // $table->unsignedBigInteger('promo_id');
        //$table->foreign('promo_id')
       // ->references('id')->on('promo')
       // ->onDelete('cascade');
       // $table->timestamp('created_at');
       // $table->timestamp('updated_at');
        private function createPromousedModel($char_name , $accounts_server_id , $accounts_expansion_id , $promo_id){
            $promo_used = new PromoUsed();
            $promo_used->char_name = $char_name;
            $promo_used->accounts_server_id = $accounts_server_id ;
            $promo_used->accounts_expansion_id = $accounts_expansion_id;
            $promo_used->promo_id = $promo_id;
            $promo_used->created_at = now();
            $promo_used->updated_at = now();
            return $promo_used;
        }

      
    }
?>