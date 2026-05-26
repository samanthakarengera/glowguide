@extends('layouts.app')

@section('content')

<h1>Welcome to GlowGuide ✨</h1>

<p>Your beauty booking platform for nails, lashes & brows.</p>

<hr>

<h2>Featured Categories</h2>

<div style="display:flex; gap:15px; flex-wrap:wrap;">

@foreach($categories as $category)

    <a href="/categories/{{ $category->id }}">

        <div class="card" style="background:#ffd6e7;min-width:180px;text-align:center;">

            <h3>{{ $category->name }}</h3>

        </div>

    </a>

@endforeach

</div>

<section style="
margin-top:80px;
padding:40px;
background:#ffe6f0;
border-radius:25px;
text-align:center;
">

    <h2 style="font-size:32px;">
        Frequently Asked Questions 
    </h2>

    <p style="margin-bottom:20px;">
        Need help? Find answers to common questions.
    </p>

    <a href="/faq" class="nav-btn">
        View FAQ
    </a>

<section style="
margin-top:40px;
padding:40px;
background:#ffd6e7;
border-radius:25px;
text-align:center;
">

    <h2 style="font-size:32px;">
        Contact Us 💌
    </h2>

    <p style="margin-bottom:20px;">
        Have questions or need help?
    </p>

    <a href="/contact" class="nav-btn">
        Contact GlowGuide
    </a>

</section>
@endsection