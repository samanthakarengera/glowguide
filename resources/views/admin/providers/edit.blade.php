@extends('layouts.admin')

@section('content')

<h1>Edit Provider</h1>

<form action="{{ route('providers.update', $provider->id) }}" method="post">

    @csrf
    @method('PUT')

    <label>Name</label>
    <input type="text" name="name" value="{{ $provider->name }}">

    <label>City</label>
    <input type="text" name="city" value="{{ $provider->city }}">

    <label>Category</label>

    <select name="category_id">

        @foreach($categories as $category)

            <option
                value="{{ $category->id }}"
                @selected($provider->category_id == $category->id)
            >
                {{ $category->name }}
            </option>

        @endforeach

    </select>

    <label>Bio</label>

    <textarea name="bio">{{ $provider->bio }}</textarea>

    <br><br>

    <button type="submit">
        Update
    </button>

</form>

@endsection