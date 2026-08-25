<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FaqCategoryController extends Controller
{
    public function index()
    {

        $faq_categories = FaqCategory::orderBy('name')->get();
        return view(
            'admin.faq.faqcategories.index',
            compact('faq_categories')
        );
    }

    public function create()
    {
        return view('admin.faq.faqcategories.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255|unique:faq_categories,name',
        ]);

        FaqCategory::create([
            'name' => ucfirst(strtolower(trim($request->name))),
            'slug' => Str::slug($request->name),
        ]);

        return redirect()
            ->route('faq-categories.index')
            ->with('success', 'FAQ category created successfully!');
    }


    public function show(FaqCategory $faq_category)
    {
        return view(
            'admin.faq.faqcategories.index',
            compact('faq_category')
        );
    }

    public function edit(FaqCategory $faq_category)
    {
        return view(
            'admin.faq.faqcategories.edit',
            compact('faq_category')
        );
    }

    public function update(
        Request $request,
        FaqCategory $faq_category
    ) {
  
        $request->validate([
            'name' => 'required|string|max:255|unique:faq_categories,name,' . $faq_category->id,
        ]);

        $faq_category->update([
            'name' => ucfirst(strtolower(trim($request->name))),
            'slug' => Str::slug($request->name),
        ]);

        return redirect()
            ->route('faq-categories.index')
            ->with('success', 'FAQ category updated successfully!');
    }

    public function destroy(FaqCategory $faq_category)
    {
        $faq_category->delete();

        return redirect()
            ->route('faq-categories.index')
            ->with('success', 'FAQ category deleted successfully!');
    }
}