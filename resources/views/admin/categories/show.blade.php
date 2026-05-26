@extends('layouts.app')

@section('content')

<a href="{{ url()->previous() }}" class="back-btn">
    ← Go Back
</a>

<h1>{{ $category->name }}</h1>

@foreach($providers as $provider)

    <div class="card">

        <h3>
            <a href="/providers/{{ $provider->id }}">
                {{ $provider->name }}
            </a>
        </h3>

        <p>{{ $provider->city }}</p>

    </div>

@endforeach

@endsection