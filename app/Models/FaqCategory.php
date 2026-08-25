<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];


    // Eén categorie kan meerdere FAQ vragen hebben
    public function faqItems()
    {
        return $this->hasMany(FaqItem::class);
    }
}