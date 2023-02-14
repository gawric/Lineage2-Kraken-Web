<?php
 
namespace App\Models\Server;
 
use Illuminate\Database\Eloquent\Model;
 
//обращаемся к rusacis
class ServerClanData extends Model
{
    
    protected $table = 'clan_data';
    protected $primaryKey = 'clan_id';
    public $timestamps = false;
    protected $connection = 'mysql2';

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}