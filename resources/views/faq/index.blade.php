@extends('layouts.app')

@section('content')

<a href="{{ route('welcome') }}" class="back-button" style="
    display:inline-block;
    margin-bottom:25px;
    background:#ffd6e7;
    padding:10px 15px;
    border-radius:10px;
">
        ← Back to Homepage
</a>

<h1>Frequently Asked Questions</h1>

@foreach($categories as $category)

    <div class="category-row">

        <h2>{{ $category->name }}</h2>

        @foreach($category->faqItems as $item)

            <div style="margin-bottom:20px;">

                <strong>
                    {{ $item->question }}
                </strong>

                <p>
                    {{ $item->answer }}
                </p>

            </div>

        @endforeach

    </div>

@endforeach

@endsection