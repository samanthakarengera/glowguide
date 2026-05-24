@extends('layouts.admin')

@section('content')

<h1>FAQ Questions</h1>

<a href="/admin/faq-items/create">
    + New FAQ Question
</a>

@foreach($faqItems as $item)

<div class="category-row">

    <strong>{{ $item->question }}</strong>

    <p>{{ $item->category->name }}</p>

</div>

@endforeach

@endsection