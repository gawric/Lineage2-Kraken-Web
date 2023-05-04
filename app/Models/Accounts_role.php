<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Хранится роль ючетки
class Accounts_role extends Model
{
    use HasFactory;
    protected $table = 'accounts_role';
    //public $timestamps = false;

    public function account_expansion()
    {
      return $this->belongsTo(Accounts_expansion::class);
    }

    public function __toString() {
      return " Роль юзера " . $this->name . " id юзера " . $this->accounts_expansion_id;
    }
}
