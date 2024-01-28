<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function cafeRestaurant()
    {
        return $this->belongsTo(CafeRestaurant::class);
    }
}
