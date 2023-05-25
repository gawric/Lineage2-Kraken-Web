<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class OrderEnot extends Model
{
    protected $table = 'order_enot';
    use HasFactory;


    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }


    
    public function __toString()
    {
      return "Модель содержит OrderEnot: " . " id " .  $this->id . " " . " sum " . $this->sum . " char_name ". $this->char_name . " login " . $this->login; 
    }
}