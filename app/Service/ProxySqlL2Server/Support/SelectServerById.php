<?php

namespace App\Service\ProxySqlL2Server\Support;
use Config;
use App;

//Оболочка для хранения синглтонов, что-бы при выполнении Cron Job не создавать десятки новых классов
//Не используется в laravel у него есть свой специальный контейнер
class SelectServerById
{
    //private $list_support_developer;
    private static array $instance;


    public static function choose($id_developer){

        $list_support_developer = Config::get('lineage2.server.support_developers');

        foreach($list_support_developer as  $key => $value){
            if($key == $id_developer){
                return SelectServerById::getInstance($value);
            }
        }
    }

    public static function getInstance($value)
    {
        if(!isset(SelectServerById::$instance)){
            SelectServerById::$instance = [];
        }

        $resultSerach = SelectServerById::isSearch($value , SelectServerById::$instance);
        SelectServerById::addObject($resultSerach , $value);
        return SelectServerById::getObject($value , SelectServerById::$instance);
    }

 
       //true - нашли данный тип в нашем списке синглов!
    private static function isSearch($value , $instance){
        foreach($instance as $item){
            if(strcmp($value, get_class($item)) > -1){
                return true;
            }
        }

        return false;
    }

    private static function addObject($resultSerach , $value){
        if(!$resultSerach){
            array_push(SelectServerById::$instance, new $value);
        }
        
    }

    private static function getObject($value , $instance){
        foreach($instance as $item){
            if(strcmp($value, get_class($item)) > -1){
                return $item;
            }
        }

    }

  
}
?>