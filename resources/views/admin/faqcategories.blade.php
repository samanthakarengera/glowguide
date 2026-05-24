@extends('layouts.admin')

@section('content')

<h1>FAQ Categories</h1>

<a href="/admin/faq-categories/create">
    + New FAQ Category
</a>

@foreach($categories as $category)

<div class="category-row">

    <strong>{{ $category->name }}</strong>

</div>

@endforeach

@endsection