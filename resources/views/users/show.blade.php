@extends('layouts.admin')

@section('content')

<h1>{{ $user->username ?? $user->name }}</h1>

@if($user->avatar)

    <img
        src="{{ asset('storage/' . $user->avatar) }}"
        width="150"
    >

@endif

<p>{{ $user->bio }}</p>

<p>{{ $user->city }}</p>

<p>{{ $user->birthday }}</p>

@endsection