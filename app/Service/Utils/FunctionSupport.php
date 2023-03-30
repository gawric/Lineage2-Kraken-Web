<?php

namespace App\Service\Utils;

use Auth;
use App\Models\Temp\InfoDashboard;
use App\Models\Temp\InfoDashboardChars;
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

    public static function getModelCharactersDb($server_id , $list_servers){
        if (isset($list_servers)) {
            foreach($list_servers as $value){
                if($server_id == $value['id']){
                    return $value['server_db_model'];
                }
            }
        }
        //если не нашли
        return "";
    }

    public static function getModelClanDataDb($server_id , $list_servers){
        if (isset($list_servers)) {
            foreach($list_servers as $value){
                if($server_id == $value['id']){
                    return $value['clandata_db_model'];
                }
            }
        }
        //если не нашли
        return "";
    }

    //Личный кабинет все аккаунты(инфа для вывода в таблицу)
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

     //Личный кабинет все персонажи игрока по всем аккаунтам(инфа для вывода в таблицу)
     public static function createModelInfoDashBoardChars($id , $char_name , $account_name , $lvl , $clan_name , $pvp , $pk , $last_data , $server_name , $online){
        $InfoDashboardChars = new InfoDashboardChars();
      //  info("createModelInfoDashBoardChars>>>>");
      //  info($account_name);
        $InfoDashboardChars->id = $id;
        $InfoDashboardChars->char_name = $char_name;
        $InfoDashboardChars->account_name = $account_name;
        $InfoDashboardChars->lvl = $lvl;
        $InfoDashboardChars->clan_name = $clan_name;
        $InfoDashboardChars->pvp = $pvp;
        $InfoDashboardChars->pk = $pk;
        $timestampSeconds = $last_data / 1000;
        $InfoDashboardChars->last_data = self::getData($timestampSeconds);
        $InfoDashboardChars->server_name = $server_name;
        $InfoDashboardChars->online = self::getOnline($online);
       // info($InfoDashboardChars);
        return  $InfoDashboardChars;
    }

    
    private static function getOnline($online){
        if(isset($online)){
            if($online > 0){
                return "online";
            }
            return "offline";
        }

        return "offline";
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
     
        $date =  date("Y/m/d H:m:s", $timestampSeconds);
        info( $timestampSeconds );
        info( $date );
        return $date;
    }

  

    
 }
?>