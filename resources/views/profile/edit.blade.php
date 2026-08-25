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

<h1>My Profile</h1>

<form method="POST" action="/profile">

    @csrf
    @method('PATCH')

    <label>Username</label>

    <input
        type="text"
        name="username"
        value="{{ auth()->user()->username }}"
    >

    <label>Birthday</label>

    <input
        type="date"
        name="birthday"
        value="{{ auth()->user()->birthday }}"
    >

    <label>City</label>

    <input
        type="text"
        name="city"
        value="{{ auth()->user()->city }}"
    >

    <label>Bio</label>

    <textarea name="bio">{{ auth()->user()->bio }}</textarea>

    <button type="submit">
        Save Profile
    </button>

</form>

@endsection