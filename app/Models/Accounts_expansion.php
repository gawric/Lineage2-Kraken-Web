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
}