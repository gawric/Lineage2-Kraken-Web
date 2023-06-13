<?php

 namespace App\Service\PersonalArea\AdminPromo;

   
 use Config;
 use App\Models\Promo;
 use App\Service\Utils\FunctionSupport;
 use App\Service\Utils\FunctionAuthUser;
 use App\Service\PersonalArea\AdminPromo\Support\GeneratedPromoCodes;
 use App\Service\PersonalArea\AdminPromo\Support\SqlSupport;

    class AdminPromo implements IAdminPromo
    {

        private $list_server;
        private GeneratedPromoCodes $generated;
        private SqlSupport $sql_support;


        public function __construct() {
            $this->list_server = Config::get('lineage2.server.list_server');
            $this->tables_db_payments = Config::get('lineage2.server.coin_payments');
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

        

      
    }
?>