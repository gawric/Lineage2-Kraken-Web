<?php

namespace App\Models\Temp;




 class InfoAdminL2Accounts
 {
    public $id;
    public $is_blocked;
    public $l2account_name;
    public $lockdate;
    public $server_name;

    public function __toString()
    {
      return "Модель содержит: " . " id " .  $this->id . " " . " is_blocked " . $this->is_blocked . " l2account_name ". $this->l2account_name . " lockdate " . $this->lockdate; 
    }
 }