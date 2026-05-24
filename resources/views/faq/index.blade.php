@extends('layouts.admin')

@section('content')

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