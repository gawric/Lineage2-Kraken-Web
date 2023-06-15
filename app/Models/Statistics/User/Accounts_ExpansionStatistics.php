<?php

namespace App\Models\Statistics\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Statistics\InfoAllStatistics;
use Carbon\Carbon;


 class Accounts_ExpansionStatistics extends Model
 {
    use HasFactory;
    protected $table = 'user_statistics';

    public function all_statistics()
    {
      return $this->belongsTo(InfoAllStatistics::class);
    }
      

    public function getDay(){
      return (int)Carbon::parse($this->day)->format('d');
    }


    public function __toString()
    {
        return "Accounts_ExpansionStatistics содержит: " . " id " .  $this->id .  " url_open " . $this->url  . " created_at " . $this->created_at;
    }
 }