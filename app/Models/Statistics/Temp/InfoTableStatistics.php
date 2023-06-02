<?php

namespace App\Models\Statistics\Temp;




 class InfoTableStatistics
 {
    public $id;
    public $ip_address;
    public $count;
    public $day;

    public function __toString()
    {
        return "InfoTableStatistics содержит: " . " ip_address " .  $this->ip_address . " count " . $this->count . " day " . $this->day;
    }
 }