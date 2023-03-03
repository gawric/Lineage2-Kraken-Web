<?php
 
namespace App\Models\Server;
 
use Illuminate\Database\Eloquent\Model;
 
//обращаемся к rusacis
class ServerAccounts extends Model
{
    
    protected $table = 'accounts';
    protected $primaryKey = 'login';
    public $timestamps = false;
    protected $connection = 'mysql2';
    public $incrementing = false;

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}