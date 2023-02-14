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
    private $listClassId;

    public function __construct($arr_data = null, array $attributes = array())
    {

        $this->listClassId = Config::get('lineage2.class_id.list_class_id');
        $this->add($arr_data);
       

        parent::__construct($attributes);
    }

    private function add($arr_data){
        $this->obj_id = $arr_data['obj_id'];
        $this->server_id = 0;
        $this->name = $arr_data['char_name'];
        $this->class = $this->ConvertClassIdToName($arr_data['classid']);
        $this->clan = $arr_data['clanid'];
        $this->lvl = $arr_data['level'];
        $this->pvp = $arr_data['pvpkills'];
        $this->pk = $arr_data['pkkills'];
        $this->onlinetime = $arr_data['onlinetime'];
        $this->online = $arr_data['online'];
    }

    public function ConvertClassIdToName($class_id) : string {

        if(isset($this->listClassId)){
            if(array_key_exists($class_id, $this->listClassId)){
                return $this->listClassId[$class_id];
            }
        }
      
        return 'Non';
    }
}