<?php
 
namespace App\Models\Server;
 
use Illuminate\Database\Eloquent\Model;
 
//обращаемся к rusacis
class ServerCharacters extends Model
{
    
    protected $table = 'characters';
    protected $primaryKey = 'obj_Id';
    public $timestamps = false;
    protected $connection = 'mysql2';
}