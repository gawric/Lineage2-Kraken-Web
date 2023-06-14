<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promo\PromoCodes;

class PromoUsed extends Model
{
    use HasFactory;
    protected $table = 'promo_used';

    public function promo_code()
    {
      return $this->belongsTo(PromoCodes::class , 'promo');
    }

}
