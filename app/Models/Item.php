<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Item extends Model
{
    use HasFactory,
        HasTranslations;

    public array $translatable = [
        'name',
        'description',
    ];

    protected $casts = [
        'prices' => 'array',
        'tags' => 'array',
        'name' => 'array',
        'description' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
