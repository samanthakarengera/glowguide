@extends('layouts.app')

@section('content')

<h1>Welcome to GlowGuide ✨</h1>

<p>Your beauty booking platform for nails, lashes & brows.</p>

<hr>

<h2>Featured Categories</h2>

<div style="display:flex; gap:15px; flex-wrap:wrap;">

@foreach($categories as $category)

    <a href="/categories/{{ $category->id }}">

        <div class="card">

            <h3>{{ $category->name }}</h3>

        </div>

    </a>

@endforeach

</div>

<section id="faq">

    <h2>Need help?</h2>

    <p>
        Bekijk onze veelgestelde vragen.
    </p>

    <a href="{{ route('faq') }}">
        Go to FAQ
    </a>

</section>
@endsection