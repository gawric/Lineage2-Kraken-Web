<?php
 
namespace App\Models\Server\Lucera;
 
use Illuminate\Database\Eloquent\Model;
 
//обращаемся к lucera
class LuceraServerAccounts extends Model
{
    
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