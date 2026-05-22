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

<footer style="margin-top:50px;">
    <a href="#faq">FAQ</a>
</footer>

@endsection