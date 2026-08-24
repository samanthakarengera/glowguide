@extends('layouts.admin')

@section('content')

<a href="{{ route('admin.dashboard') }}" class="back-button">
        ← Back to Dashboard
</a>

<h1>FAQ Categories</h1>

<a href="{{ route('faq-categories.create') }}" class="primary-button">
    + New Category
</a>

<br><br>

@foreach($categories as $category)

    <div class="category-row">

        <strong>{{ $category->name }}</strong>

    </div>

@endforeach

@endsection