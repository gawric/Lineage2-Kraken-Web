<?php

namespace App\Models\Temp;




 class InfoAdminL2Accounts
 {
    public $id;
    //or login db server
    public $l2account_name;
    public $char_name;
    public $col;
    public $server_name;
    public $payment_name;
    public $payment_data;
    public $success_status;
    

    public function __toString()
    {
      return "Модель содержит: " . " id " .  $this->id . " " . " is_blocked " . $this->is_blocked . " l2account_name ". $this->l2account_name . " lockdate " . $this->lockdate; 
    }
 }