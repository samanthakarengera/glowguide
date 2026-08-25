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

<div class="card">

    <h1>{{ $provider->name }}</h1>

    <p>{{ $provider->bio }}</p>

    <p>{{ $provider->city }}</p>

    <p>{{ $provider->category->name }}</p>

</div>

@endsection