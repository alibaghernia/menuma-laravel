<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

//prices
//tags
    protected $casts = [
        'prices' => 'array',
        'tags' => 'array',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
