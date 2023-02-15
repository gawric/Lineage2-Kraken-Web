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
  

    public function __construct($server_id , &$listClassId , $arr_data = null, array $attributes = array())
    {

       
        $this->add($arr_data , $server_id , $listClassId);
       

        parent::__construct($attributes);
    }

    private function add($arr_data , $server_id , &$listClassId){
        $this->obj_id = $arr_data['obj_id'];
        $this->server_id = $server_id;
        $this->name = $arr_data['char_name'];
        $this->class = $this->ConvertClassIdToName($arr_data['classid'] , $listClassId);
        $this->clan = $arr_data['clanid'];
        $this->lvl = $arr_data['level'];
        $this->pvp = $arr_data['pvpkills'];
        $this->pk = $arr_data['pkkills'];
        $this->onlinetime = $arr_data['onlinetime'];
        $this->online = $arr_data['online'];
    }

    private function ConvertClassIdToName($class_id , &$listClassId) : string {

        if(isset($this->listClassId)){
            if(array_key_exists($class_id, $listClassId)){
                return $listClassId[$class_id];
            }
        }
      
        return 'Non';
    }
}