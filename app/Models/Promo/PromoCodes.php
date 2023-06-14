<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promo\PromoUsed;

class PromoCodes extends Model
{
    use HasFactory;
    protected $table = 'promo';

    
     public function promo_used()
     {
       return $this->hasMany(PromoUsed::class);
     }
}
