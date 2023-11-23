<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CafeRestaurant extends Model
{
    use HasFactory;

    public function manager(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
