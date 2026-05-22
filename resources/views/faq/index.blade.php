@extends('layouts.app')

@section('content')

<h1>FAQ</h1>

@foreach($categories as $category)

    <h2>{{ $category->name }}</h2>

    {{-- elke category heeft vragen --}}
    @foreach($category->faqs as $faq)

        <div class="card">
            <strong>{{ $faq->question }}</strong>
            <p>{{ $faq->answer }}</p>
        </div>

    @endforeach

@endforeach

@endsection