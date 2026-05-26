@extends('layouts.app')

@section('content')

<a href="{{ url()->previous() }}" class="back-btn">
    ← Go Back
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