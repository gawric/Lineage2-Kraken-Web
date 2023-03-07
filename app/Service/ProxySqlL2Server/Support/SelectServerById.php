<?php

namespace App\Service\ProxySqlL2Server\Support;
use Config;
use App;

class SelectServerById
{
    private $list_support_developer;

     public function __construct() {
            $this->list_support_developer = Config::get('lineage2.server.support_developers');
    }

    public function choose($id_developer){
        foreach($this->list_support_developer as  $key => $value){
            if($key == $id_developer){
                
                //$container = app();
                //return $container->singleton($value);
                return app()->make($value);
               // return app()->singleton($value);
            }
        }
    }
}
?>