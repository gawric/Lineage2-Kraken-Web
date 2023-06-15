<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Accounts_role;
use App\Models\Accounts_ip;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Accounts_server_id;


//Обращемся к laravel бд
class Accounts_expansion extends Authenticatable implements MustVerifyEmail
{
    protected $table = 'accounts_expansion';
    use Notifiable;
    use HasFactory;

    public $is_activate_detected_ip = false;
    public $unknow_ip = "";
    //Возрващаем все записи accounts_server_id
    public function accounts_server_id()
    {
      return $this->hasMany(Accounts_server_id::class);
    }

   

     //Возрващаем все записи Accounts_ip / храним все ип адреса пользователя
     public function accounts_ip()
     {
       return $this->hasMany(Accounts_ip::class)->orderBy('email_verified_at', 'desc');
     }

     //Возвращаем роль учетки
     public function accounts_role()
     {
       return $this->hasMany(Accounts_role::class);
     }


     //Возрващаем записи с фильтром по server_id
     public function accountsServerFilterById($search_server_id){
       return $this->hasMany(Accounts_server_id::class)->where('server_id', $search_server_id);
     }


     public function accountsServerFilterByServerIdAndL2Login($search_server_id , $l2_login){
      return $this->hasMany(Accounts_server_id::class)->where('server_id', $search_server_id)->where('account_name', $l2_login);
    }

    

    //Возрващаем записи с фильтром по server_id
    //public function accountsServerFilterById($search_server_id){
    //  return $this->hasMany(Accounts_server_id::class)->where('server_id', $search_server_id);
    //}

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    public function getCountAccounts(){
      return $this->hasMany(Accounts_server_id::class)->where('accounts_expansion_id',$this->id)->count();
    }

    

    protected $fillable = ['id', 'login', 'email', 'password'];
}