@extends('layouts.admin')

@section('content')

<h1>FAQ Categories</h1>

<a href="/admin/faq/faqcategories/create">
    + New Category
</a>

<br><br>

@foreach($categories as $category)

    <div class="category-row">

        <strong>{{ $category->name }}</strong>

    </div>

@endforeach

@endsection