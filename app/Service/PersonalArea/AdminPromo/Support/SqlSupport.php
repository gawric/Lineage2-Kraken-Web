<?php

 namespace App\Service\PersonalArea\AdminPromo\Support;

   
 use Config;
 use App\Models\Promo\PromoCodes;
 use App\Service\Utils\FunctionSupport;


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

        private function isExist($code){
            return PromoCodes::select("code")
                        ->where("code", $code)
                        ->exists();
        }

      
    }
?>