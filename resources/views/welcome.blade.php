@extends('layouts.app')

@section('content')

<h1>Welcome to GlowGuide ✨</h1>

<p>Your beauty booking platform for nails, lashes & brows.</p>

<hr>

<h2>Featured Categories</h2>

@foreach(\App\Models\Category::all() as $category)

    <div class="card">
        {{ $category->name }}
    </div>

@endforeach

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