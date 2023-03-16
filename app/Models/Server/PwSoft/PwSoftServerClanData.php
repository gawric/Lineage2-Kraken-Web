<?php
 
namespace App\Models\Server\PwSoft;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//обращаемся к PwSoft
class PwSoftServerClanData extends Model
{
    use HasFactory;

    protected $table = 'clan_data';
    protected $primaryKey = 'clan_id';
    public $timestamps = false;
    protected $connection = 'mysql3';

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}