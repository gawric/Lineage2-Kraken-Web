<?php

namespace App\Models\Statistics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


 class InfoAllStatistics extends Model
 {
    use HasFactory;



    protected $table = 'all_statistics';

    public function __toString()
    {
        return "InfoAllStatistics содержит: " . " id " .  $this->id . " created_at " . $this->created_at;
    }
 }