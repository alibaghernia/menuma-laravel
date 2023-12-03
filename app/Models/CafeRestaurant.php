<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CafeRestaurant extends Model
{
    use HasFactory;

    public function manager(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function items(): HasManyThrough
    {
        return $this->hasManyThrough(Item::class, Category::class);
    }

    public function workingHours()
    {
        return $this->hasMany(WorkingHour::class);
    }
}
