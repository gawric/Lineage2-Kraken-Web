<?php
 
namespace App\Models\Server\PwSoft;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
 

class PwSoftServerAccounts extends Model
{
    use HasFactory;
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