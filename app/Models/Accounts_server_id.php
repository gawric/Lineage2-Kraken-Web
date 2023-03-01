<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts_server_id extends Model
{
    protected $table = 'accounts_server_ids';
    public $timestamps = false;

    public function account_expansion()
    {
      return $this->belongsTo(Accounts_expansion::class);
    }
}
