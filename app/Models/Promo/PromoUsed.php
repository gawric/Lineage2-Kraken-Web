<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promo\PromoCodes;
use App\Models\Accounts_server_id;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PromoUsed extends Model
{
    use HasFactory;
    protected $table = 'promo_used';

    public function promo_code()
    {
      return $this->belongsTo(PromoCodes::class , 'promo');
    }

    public function getAccountName(){
      
      try
      {
          $model = Accounts_server_id::findOrFail($this->accounts_server_id);
          if(isset($model->account_name)){
            return $model->account_name;
          }
      }
      catch(ModelNotFoundException $e){
        return "";
      }
    }

}
