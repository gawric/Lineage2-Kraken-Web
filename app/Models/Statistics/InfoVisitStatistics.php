<?php

namespace App\Models\Statistics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


 class InfoVisitStatistics extends Model
 {
    use HasFactory;



    protected $table = 'visit_statistics';

    public function __toString()
    {
        return "InfoVisitStatistics содержит: " . " ip_address " .  $this->ip_address . " URL " . $this->open_url;
    }
 }