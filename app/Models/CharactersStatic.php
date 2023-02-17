<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Config;
use Log;
//Обращемся к laravel бд
// $table->integer('obj_id')->unsigned();
       // $table->integer('server_id')->unique();
        //$table->string('name');
        //$table->string('class');
       // $table->string('clan');
       // $table->integer('lvl');
        //$table->integer('pvp');
        //$table->integer('pk');
       // $table->integer('onlinetime');
       // $table->boolean('online');
    //
     //  {"obj_id":268481136,"char_name":"darkelffigter","classid":0,"clanid":1,"level":1,"pvpkills":22,"pkkills":0,"onlinetime":13,"online":0}
class CharactersStatic extends Model
{
    protected $table = 'characters_static_servers';
    use HasFactory;

    public $timestamps = false;
  
 

    public  function ConvertClassIdToName($class_id , $listClassId) : string {
        if(isset($listClassId)){
            if(array_key_exists($class_id, $listClassId)){
                return $listClassId[$class_id];
            }
        }
      
        return 'Non';
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }


    protected $fillable = ['obj_id', 'server_id', 'name', 'class' , 'clan' , 'lvl', 'pvp', 'pk', 'onlinetime' , 'online'];
}