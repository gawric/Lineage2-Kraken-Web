<?php
 
namespace App\Models\Server\PwSoft;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//обращаемся к rusacis
class PwSoftServerCharacters extends Model
{
    use HasFactory;

    protected $table = 'characters';
    protected $primaryKey = 'obj_Id';
    public $timestamps = false;
    protected $connection = 'mysql3';

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}