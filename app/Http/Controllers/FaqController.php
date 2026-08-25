<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FaqCategory;

class FaqController extends Controller
{
    public function index()
{
   
    // faqItems() is de relationship die in FaqCategory.php staat.
    $categories = FaqCategory::with('faqItems')
        ->orderBy('name')
        ->get();

    return view('faq.index', compact('categories'));
}
}