<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FaqCategory;

class FaqController extends Controller
{
    public function index()
    {
        //laad categories + vragen
        $categories = FaqCategory::with('items')->get();

        return view('faq.index', compact('categories'));
    }
}