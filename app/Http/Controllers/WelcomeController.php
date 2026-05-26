<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class WelcomeController extends Controller
{
    public function index()
{
    // haalt alle categories op homepage
    $categories = Category::all();

    return view('welcome', compact('categories'));
}
}
