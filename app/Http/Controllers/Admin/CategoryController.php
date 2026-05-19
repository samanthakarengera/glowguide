<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function create()
    {
        return view('admin.categories.create');
    }

    function store(Request $request)
    {
        dd($request); //met dees moet ik alles kunnen zien dat in de request ligt
    }
}
