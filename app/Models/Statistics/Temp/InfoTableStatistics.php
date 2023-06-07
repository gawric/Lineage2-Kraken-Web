<?php

namespace App\Models\Statistics\Temp;




 class InfoTableStatistics
 {
    public $id;
    public $ip_address;
    public $count;
    public $day;
    //заполняется только для userstatistics
    public $login;
    public $account_expansion_id;

    public function __toString()
    {
        return "InfoTableStatistics содержит: " . " ip_address " .  $this->ip_address . " count " . $this->count . " day " . $this->day. " login " . $this->login;
    }
 }