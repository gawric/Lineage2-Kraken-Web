<?php

namespace App\Models\Statistics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Statistics\InfoVisitStatistics;
use App\Models\Statistics\User\Accounts_ExpansionStatistics;

 class InfoAllStatistics extends Model
 {
    use HasFactory;



    protected $table = 'all_statistics';


    public function visit_statistics()
    {
      return $this->hasMany(InfoVisitStatistics::class);
    }

    public function user_statistics()
    {
      return $this->hasMany(Accounts_ExpansionStatistics::class);
    }
      

    public function __toString()
    {
        return "InfoAllStatistics содержит: " . " id " .  $this->id . " created_at " . $this->created_at;
    }
 }