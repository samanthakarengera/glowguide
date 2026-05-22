<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    protected $fillable = ['name', 'slug'];

    // note: 1 categorie heeft veel vragen
    public function items()
    {
        return $this->hasMany(FaqItem::class);
    }
}