<?php
 
namespace App\Models\Server;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//обращаемся к rusacis таблица с инвентарем
class ServerItems extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'object_id';
    public $timestamps = false;
    protected $connection = 'mysql2';

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}