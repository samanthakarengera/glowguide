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
        $request->validate([
    'name' => 'required|unique:categories,name|max:255',]);
        \App\Models\Category::create([
            'name'=> $request->name,
            'slug'=> Str::slug($request->name),

        ]);

        return redirect('/admin/categories');
        
    }

    public function edit(Category $category)
{
    return view('admin.categories.edit', compact('category'));
}



 public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => ucfirst($request->name),
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('categories.index');
    }

public function destroy(Category $category)
{
    $category->delete();

    return redirect()->route('categories.index');
}
}
