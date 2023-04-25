<?php
 
namespace App\Models\Server\PwSoft;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PwSoftItems extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'object_id';
    public $timestamps = false;
    protected $connection = 'mysql3';

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}