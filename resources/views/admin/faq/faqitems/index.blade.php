@extends('layouts.admin')

@section('content')

<a href="{{ route('admin.dashboard') }}" class="back-button">
        ← Back to Dashboard
</a>

<h1>FAQ Questions</h1>

<a href="{{ route('faq-items.create') }}" class="primary-button">
    + New FAQ Question
</a>

@foreach($faqItems as $item)

<div class="category-row">

    <strong>{{ $item->question }}</strong>

    <p>{{ $item->category->name }}</p>

</div>

@endforeach

@endsection