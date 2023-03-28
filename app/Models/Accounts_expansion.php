<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

//Обращемся к laravel бд
class Accounts_expansion extends Authenticatable implements MustVerifyEmail
{
    protected $table = 'accounts_expansion';
    use Notifiable;

    //Возрващаем все записи accounts_server_id
    public function accounts_server_id()
    {
      return $this->hasMany(Accounts_server_id::class);
    }

    //Возрващаем записи с фильтром по server_id
    public function accountsServerFilterById($search_server_id){
      return $this->hasMany(Accounts_server_id::class)->where('server_id', $search_server_id);
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    public function getCountAccounts(){
      return $this->hasMany(Accounts_server_id::class)->where('accounts_expansion_id',$this->id)->count();
  }
}