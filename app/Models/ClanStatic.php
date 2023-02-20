<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Config;
use Log;
//Обращемся к laravel бд
//$table->id();
//$table->integer('clan_id');
//$table->string('clan_name');
//$table->integer('clan_level');
//$table->integer('reputation_score');
//$table->tinyInteger('hasCastle');
//$table->integer('ally_id');
//$table->string('ally_name');
//$table->integer('member');
class ClanStatic extends Model
{
    protected $table = 'characters_static_servers';
    use HasFactory;

    public $timestamps = false;
  
 
    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }


    protected $fillable = ['clan_id', 'clan_name', 'clan_level', 'reputation_score' , 'hasCastle' , 'ally_id', 'ally_name', 'member'];
}