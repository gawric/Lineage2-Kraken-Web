<?php
 
namespace App\Models\Server\Lucera;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
 
//обращаемся к lucera
class LuceraServerAccounts extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    protected $primaryKey = 'login';
    public $timestamps = false;
    protected $connection = 'mysql4';
    public $incrementing = false;

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}