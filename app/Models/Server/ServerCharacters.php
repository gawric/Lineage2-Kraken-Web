<?php
 
namespace App\Models\Server;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//обращаемся к rusacis
class ServerCharacters extends Model
{
    use HasFactory;

    protected $table = 'characters';
    protected $primaryKey = 'obj_Id';
    public $timestamps = false;
    protected $connection = 'mysql2';

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}