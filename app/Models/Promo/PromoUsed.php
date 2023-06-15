<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promo\PromoCodes;
use App\Models\Accounts_server_id;


class PromoUsed extends Model
{
    use HasFactory;
    protected $table = 'promo_used';

    public function promo_code()
    {
      return $this->belongsTo(PromoCodes::class , 'promo');
    }

    public function getAccountName(){
      $model = Accounts_server_id::findOrFail($this->accounts_server_id);
        if(isset($model->account_name)){
          return $model->account_name;
      }

        return "";
    }

}
