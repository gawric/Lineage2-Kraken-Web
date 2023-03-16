<?php
 
namespace App\Models\Server\PwSoft;
 
use Illuminate\Database\Eloquent\Model;
 
//обращаемся к pwsoft
class PwSoftServerAccounts extends Model
{
    
    protected $table = 'accounts';
    protected $primaryKey = 'login';
    public $timestamps = false;
    protected $connection = 'mysql3';
    public $incrementing = false;

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}