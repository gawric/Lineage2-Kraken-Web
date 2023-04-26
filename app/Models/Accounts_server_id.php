<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Здесь хранятся все созданные accounts юзеров
//По всем серверам. Заполняется при регистрации
//server_id,accounts_name
class Accounts_server_id extends Model
{
    use HasFactory;
    protected $table = 'accounts_server_ids';
    public $timestamps = false;

    public function account_expansion()
    {
      return $this->belongsTo(Accounts_expansion::class);
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}
