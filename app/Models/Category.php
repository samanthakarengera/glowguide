<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FaqItem;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    function articles()
    {
        return $this->hasMany(Article::class,'category_id','id');
    }

    public function providers()
{
    return $this->hasMany(Provider::class);
}

public function faqs()
{
    return $this->hasMany(FaqItem::class);
}
}
