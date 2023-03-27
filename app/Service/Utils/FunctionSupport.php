<?php

namespace App\Service\Utils;

use Auth;
use App\Models\Temp\InfoDashboard;
use Lang;

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

    public static function getServerNameById($id_server , $list_servers){
      
        if (isset($list_servers)) {
            foreach($list_servers as $value){
                if($value['id'] == $id_server){
                    return $value['name'];
                }
            }
        }
        return "Non";
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

    public static function createModelInfoDashBoard($id , $username , $dateauth , $count_characters , $name_server , $server_id){
        $infoDashboard = new InfoDashboard();
        
        $infoDashboard->id =$id ;
        $infoDashboard-> username = $username ;
        $timestampSeconds = $dateauth / 1000;
        $infoDashboard-> dateauth = self::getData($timestampSeconds);
        $infoDashboard-> count_characters = self::getCountCharacters($count_characters);
        $infoDashboard-> name_server = $name_server;
        $infoDashboard-> server_id = $server_id;

        return  $infoDashboard;
    }

    private static function getCountCharacters($count_characters){
        if($count_characters == 0){
            return Lang::get('validation.no_chars');
        }

        return $count_characters;
    }
    private static function getData($timestampSeconds){
        if($timestampSeconds == 0){
            return Lang::get('validation.no_data');
        }

        return date("Y/m/d H:m:s", $timestampSeconds);
    }

    
 }
?>