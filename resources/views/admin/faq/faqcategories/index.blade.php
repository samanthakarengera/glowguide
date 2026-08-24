@extends('layouts.admin')

@section('content')

<a href="{{ url()->previous() }}" class="back-btn">
    ← Go Back
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