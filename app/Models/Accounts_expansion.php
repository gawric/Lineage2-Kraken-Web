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

    public function accounts_server_id()
    {
      return $this->hasMany(Accounts_server_id::class);
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    public function getCountAccounts(){
      return $this->hasMany(Accounts_server_id::class)->where('accounts_expansion_id',$this->id)->count();
  }
}