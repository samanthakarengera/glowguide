<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\FaqCategory;

class FaqCategoryController extends Controller
{

    public function index()
    {
        $categories = FaqCategory::all();

        return view('admin.faq_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.faq_categories.create');
    }

    public function store(Request $request)
    {
        FaqCategory::create([

            'name' => ucfirst($request->name),

            'slug' => Str::slug($request->name),

        ]);

        return redirect('/admin/faq-categories');
    }

    public function edit(FaqCategory $faq_category)
    {
        return view('admin.faq_categories.edit', compact('faq_category'));
    }

    public function update(Request $request, FaqCategory $faq_category)
    {
        $faq_category->update([

            'name' => ucfirst($request->name),

            'slug' => Str::slug($request->name),

        ]);

        return redirect('/admin/faq-categories');
    }

    public function destroy(FaqCategory $faq_category)
    {
        $faq_category->delete();

        return redirect('/admin/faq-categories');
    }

}