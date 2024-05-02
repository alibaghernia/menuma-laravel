<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use
        HasFactory,
        HasTranslations;

    public array $translatable = [
        'name',
    ];
    protected $casts = [
        'name' => 'array',
    ];

    public function cafeRestaurant(): BelongsTo
    {
        return $this->belongsTo(CafeRestaurant::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class)
            ->orderBy('order_column');
    }
}
