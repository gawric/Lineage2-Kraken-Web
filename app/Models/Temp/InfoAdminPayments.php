<?php

namespace App\Models\Temp;




 class InfoAdminPayments
 {
    public $order_id;
    //or login db server
    public $l2account_name;
    public $username;
    public $char_name;
    public $col;
    public $server_name;
    public $payment_name;
    public $payment_data;
    public $success_status;
    

    public function __toString()
    {
      return "Модель содержит: " . " username " .  $this->username . " " . " l2account_name ". $this->l2account_name . " success_status " . $this->success_status . " col " . $this->col . " payment_data " . $this->payment_data;
    }
 }