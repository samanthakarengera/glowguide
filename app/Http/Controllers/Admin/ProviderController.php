<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Provider;
use App\Models\Category;

class ProviderController extends Controller
{

    public function index()
    {
        $providers = Provider::latest()->get();

        return view('admin.providers.index', compact('providers'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.providers.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Provider::create([

            'category_id' => $request->category_id,

            'name' => ucfirst($request->name),

            'slug' => Str::slug($request->name),

            'city' => ucfirst($request->city),

            'bio' => $request->bio,

        ]);

        return redirect()->route('providers.index');
    }

    public function edit(Provider $provider)
    {
        $categories = Category::all();

        return view('admin.providers.edit', compact('provider', 'categories'));
    }

    public function update(Request $request, Provider $provider)
    {
        $provider->update([

            'category_id' => $request->category_id,

            'name' => ucfirst($request->name),

            'slug' => Str::slug($request->name),

            'city' => ucfirst($request->city),

            'bio' => $request->bio,

        ]);

        return redirect()->route('providers.index');
    }

    public function destroy(Provider $provider)
    {
        $provider->delete();

        return redirect()->route('providers.index');
    }

}