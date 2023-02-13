<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


//Обращемся к laravel бд
class CharactersStatic extends Model
{
    protected $table = 'characters_static_servers';
    use HasFactory;

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}