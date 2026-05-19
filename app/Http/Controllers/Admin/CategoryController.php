<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        //Data laden
        $categories = Category::all();
        //Data doorgeven aan de view
        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    function store(Request $request)
    {
        
        \App\Models\Category::create([
            'name'=> $request->name,
            'slug'=> Str::slug($request->name),

        ]);

        return redirect('/admin/categories');
        
    }
}
