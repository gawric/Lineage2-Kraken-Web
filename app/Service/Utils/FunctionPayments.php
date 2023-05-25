<?php

namespace App\Service\Utils;

use Auth;

use App\Models\OrderEnot;
use Lang;
use Config;
use App\Models\Temp\InfoAdminPayments;

 class FunctionPayments
 { 
    //'coin_payments' =>['coin_of_luck' =>4037],
    public static function getPaymentsItemIdByName($name_item){
        $array = Config::get('lineage2.server.coin_payments');
        return $array[$name_item];
    }

    public static function createOrders($sum , $status , $char_name , $accounts_expansion_id , $created_at , $updated_at , $server_id , $login){
        $order = new OrderEnot();
        $order->sum = $sum;
        $order->status = $status;
        $order->char_name = $char_name;
        $order->login = $login;
        $order->server_id = $server_id;
        $order->accounts_expansion_id = $accounts_expansion_id;
        $order->created_at = $created_at;
        $order->updated_at = $updated_at;

        return $order;
    }

    public static function getAllPaymentsNameAndId($list_payments){
        $temp = [];
        if (isset($list_payments)) {
            $index = 0;
            foreach($list_payments as $value){
                $arr = [$index++ , $value];
                self::addArray($temp , $arr);
            }
        }
    
        return $temp;
    }

    private static function addArray(&$temp , $value){
        array_push($temp , $value);
    }

    public static function createModelInfoAdminPayments($order_id , $l2account_name , $char_name , $col , $server_name , $payment_name , $payment_data , $success_status , $username){
        $infoAdminPayments = new InfoAdminPayments();
        $infoAdminPayments->order_id = $order_id;
        $infoAdminPayments->l2account_name = $l2account_name;
        $infoAdminPayments->char_name = $char_name;
        $infoAdminPayments->col = $col;
        $infoAdminPayments->server_name = $server_name;
        $infoAdminPayments->payment_name = $payment_name;
       // info($payment_data);
        $infoAdminPayments->payment_data = $payment_data;
        $infoAdminPayments->success_status = $success_status;
        $infoAdminPayments->username = $username;
      //  info($infoAdminPayments);
    return  $infoAdminPayments;
}

 }
?>