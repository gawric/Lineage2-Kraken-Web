<?php
 
namespace App\Models\Server\Lucera;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LuceraServerItems extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'object_id';
    public $timestamps = false;
    protected $connection = 'mysql4';

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}