<?php

namespace App\Models\Statistics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Statistics\InfoAllStatistics;
use Carbon\Carbon;


 class InfoVisitStatistics extends Model
 {
    use HasFactory;



    protected $table = 'visit_statistics';


    public function all_statistics()
    {
      return $this->belongsTo(InfoAllStatistics::class);
    }


    public function getDay(){
      return (int)Carbon::parse($this->day)->format('d');
    }



     public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    public function __toString()
    {
        return "InfoVisitStatistics содержит: " . " ip_address " .  $this->ip_address . " URL " . $this->open_url;
    }
 }