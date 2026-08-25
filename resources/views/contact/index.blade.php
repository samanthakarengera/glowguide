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

<h1>Contact Us</h1>

@if(session('success'))

    <p>{{ session('success') }}</p>

@endif

<form method="POST" action="/contact">

    @csrf

    <label>Your message</label>

    <textarea name="message"></textarea>

    <button type="submit">
        Send Message
    </button>

</form>

@endsection