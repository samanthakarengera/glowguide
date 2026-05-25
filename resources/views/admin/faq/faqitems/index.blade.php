@extends('layouts.admin')

@section('content')

<a href="{{ url()->previous() }}" class="back-btn">
    ← Go Back
</a>

<h1>FAQ Questions</h1>

<a href="/admin/faq/faqitems/create">
    + New FAQ Question
</a>

@foreach($faqItems as $item)

<div class="category-row">

    <strong>{{ $item->question }}</strong>

    <p>{{ $item->category->name }}</p>

</div>

@endforeach

@endsection