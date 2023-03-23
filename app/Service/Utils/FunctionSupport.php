<?php

namespace App\Service\Utils;

use Auth;

 class FunctionSupport
 { 

    private static function addArray(&$temp , $value){
        array_push($temp , $value);
    }
    
    public static  function getServerOnlyId($list_servers){
        $temp = [];
        if (isset($list_servers)) {
            foreach($list_servers as $value){
                self::addArray($temp , $value['id']);
            }
        }
        return $temp;
    }

    public static  function getServerOnlyNameAndId($list_servers){
        $temp = [];
        if (isset($list_servers)) {
            foreach($list_servers as $value){
                $arr2 = [$value['id'] , $value['name']];
                self::addArray($temp , $arr2);
            }
        }
        return $temp;
    }

    public static  function getServerOnlyName($list_servers){
        $temp = [];
        if (isset($list_servers)) {
            foreach($list_servers as $value){
                self::addArray($temp , $value['name']);
            }
        }
        return $temp;
    }

    public static function getDeveloperId($server_id , $list_servers){
        if (isset($list_servers)) {
            foreach($list_servers as $value){
                if($server_id == $value['id']){
                    return $value['developer_id'];
                }
            }
        }
        //если не нашли
        return -1;
    }

    public static function getModelAccountDb($server_id , $list_servers){
        if (isset($list_servers)) {
            foreach($list_servers as $value){
                if($server_id == $value['id']){
                    return $value['accounts_db_model'];
                }
            }
        }
        //если не нашли
        return "";
    }

    
 }
?>