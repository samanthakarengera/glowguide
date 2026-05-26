@extends('layouts.app')

@section('content')

<a href="{{ url()->previous() }}" class="back-btn">
    ← Go Back
</a>

<div class="card">

    <h1>{{ $provider->name }}</h1>

    <p>{{ $provider->bio }}</p>

    <p>{{ $provider->city }}</p>

    <p>{{ $provider->category->name }}</p>

</div>

@endsection