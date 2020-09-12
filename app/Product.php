<?php

namespace App;
use App\money_format;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
   
}
