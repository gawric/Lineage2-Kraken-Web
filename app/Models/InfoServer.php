<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


//Обращемся к laravel бд
class InfoServer extends Model
{
    use HasFactory;

    protected $fillable = ['server_id', 'status', 'online', 'last_update_at'];
}