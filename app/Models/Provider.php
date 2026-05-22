<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'city',
        'bio',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}