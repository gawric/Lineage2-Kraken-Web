<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


//Обращемся к laravel бд
class CharactersStatic extends Model
{
    protected $table = 'characters_static_servers';
    use HasFactory;
    private array $listClassId;

    public function __construct() {
        $this->$listClassId = Config::get('lineage2.class_id.list_class_id');

    }


    public function ConvertClassIdToName($class_id) : string{
        if(array_key_exists($class_id, $listClassId)){
            return $listClassId[$class_id];
        }

        return 'Non';
    }
}