@extends('layouts.app')

@section('content')

<a href="{{ url()->previous() }}" class="back-btn">
    ← Go Back
</a>

<h1 style="margin-bottom:30px;">
    {{ $category->name }} 
</h1>

<div style="
display:grid;
grid-template-columns:repeat(2,1fr);
gap:20px;
">

@foreach($providers as $provider)

    <div class="card" style="background:#ffe6f0;">

        <h3>
            <a href="/providers/{{ $provider->id }}">
                {{ $provider->name }}
            </a>
        </h3>

        <p>{{ $provider->city }}</p>

    </div>

@endforeach

</div>

@endsection