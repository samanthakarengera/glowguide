<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\FaqItem;
use App\Models\FaqCategory;

class FaqItemController extends Controller
{

    // ADMIN PAGE

    public function index()
    {
        $faqItems = FaqItem::latest()->get();

        return view('admin.faq_items.index', compact('faqItems'));
    }

    // PUBLIEKE FAQ PAGINA

    public function publicIndex()
    {
        $categories = FaqCategory::with('faqItems')->get();

        return view('faq.index', compact('categories'));
    }

    public function create()
    {
        $categories = FaqCategory::all();

        return view('admin.faq_items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        FaqItem::create([

            'faq_category_id' => $request->faq_category_id,

            'question' => $request->question,

            'answer' => $request->answer,

        ]);

        return redirect('/admin/faq-items');
    }

    public function edit(FaqItem $faq_item)
    {
        $categories = FaqCategory::all();

        return view('admin.faq_items.edit', compact('faq_item', 'categories'));
    }

    public function update(Request $request, FaqItem $faq_item)
    {
        $faq_item->update([

            'faq_category_id' => $request->faq_category_id,

            'question' => $request->question,

            'answer' => $request->answer,

        ]);

        return redirect('/admin/faq-items');
    }

    public function destroy(FaqItem $faq_item)
    {
        $faq_item->delete();

        return redirect('/admin/faq-items');
    }

}