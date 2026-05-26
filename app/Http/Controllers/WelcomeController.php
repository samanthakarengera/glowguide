<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Provider;


class WelcomeController extends Controller
{
    public function index()
{
    // haalt alle categories op homepage
    $categories = Category::all();

    return view('welcome', compact('categories'));
}

public function showCategory(Category $category)
{
    
    // providers van category ophalen
    $providers = $category->providers;

    return view('categories.show', compact('category', 'providers'));
}

// publieke provider detail pagina

public function showProvider(Provider $provider)
{
    return view('providers.show', compact('provider'));
}

}
