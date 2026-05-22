@extends('layouts.admin')

@section('content')

<h1>My Profile</h1>

<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">

    @csrf
    @method('PATCH')

    <label>Username</label>
    <input type="text" name="username" value="{{ $user->username }}">

    <label>Birthday</label>
    <input type="date" name="birthday" value="{{ $user->birthday }}">

    <label>City</label>
    <input type="text" name="city" value="{{ $user->city }}">

    <label>About Me</label>
    <textarea name="bio">{{ $user->bio }}</textarea>

    <label>Avatar</label>
    <input type="file" name="avatar">

    @if($user->avatar)
        <br>
        <img src="{{ asset('storage/' . $user->avatar) }}" width="120">
    @endif

    <br><br>

    <button type="submit">Save</button>

</form>

@endsection