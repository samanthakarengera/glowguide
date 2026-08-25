<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FaqItem;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqItemController extends Controller
{

    public function index()
    {
      
        $faq_items = FaqItem::with('faqCategory')
            ->latest()
            ->get();

        return view(
            'admin.faq.faqitems.index',
            compact('faq_items')
        );
    }


    public function create()
    {
        $faq_categories = FaqCategory::orderBy('name')->get();

        return view(
            'admin.faq.faqitems.create',
            compact('faq_categories')
        );
    }


    // Nieuwe FAQ vraag opslaan
    public function store(Request $request)
    {
        // Controleer de gegevens
        $request->validate([
            'faq_category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        FaqItem::create([
            'faq_category_id' => $request->faq_category_id,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()
            ->route('admin.faq.faqitems.index')
            ->with('success', 'FAQ question created successfully!');
    }

    public function show(FaqItem $faq_item)
    {
        return view(
            'admin.faq.faqitems.index',
            compact('faq_item')
        );
    }


    // Toon editformulier
    public function edit(FaqItem $faq_item)
    {

        $faq_categories = FaqCategory::orderBy('name')->get();

        return view(
            'admin.faq.faqitems.edit',
            compact('faq_item', 'faq_categories')
        );
    }

    public function update(
        Request $request,
        FaqItem $faq_item
    ) {

        $request->validate([
            'faq_category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq_item->update([
            'faq_category_id' => $request->faq_category_id,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()
            ->route('faq-items.index')
            ->with('success', 'FAQ question updated successfully!');
    }

    public function destroy(FaqItem $faq_item)
    {

        $faq_item->delete();

        return redirect()
            ->route('faq-items.index')
            ->with('success', 'FAQ question deleted successfully!');
    }
}