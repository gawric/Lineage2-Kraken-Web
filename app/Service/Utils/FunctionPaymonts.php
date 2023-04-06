<?php

namespace App\Service\Utils;

use Auth;

use App\Models\OrderEnot;
use Lang;


 class FunctionPaymonts
 { 

    public static function createOrders($sum , $status , $char_name , $accounts_expansion_id , $created_at , $updated_at){
        $order = new OrderEnot();
        $order->sum = $sum;
        $order->status = $status;
        $order->login = $char_name;
        $order->accounts_expansion_id = $accounts_expansion_id;
        $order->created_at = $created_at;
        $order->updated_at = $updated_at;
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

 }
?>