@extends('layouts.admin')

@section('content')

<h1>Create Provider</h1>

<form action="{{ route('providers.store') }}" method="post">

    @csrf

    <label>Name</label>
    <input type="text" name="name">

    <label>City</label>
    <input type="text" name="city">

    <label>Category</label>

    <select name="category_id">

        @foreach($categories as $category)

            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>

        @endforeach

    </select>

    <label>Bio</label>

    <textarea name="bio"></textarea>

    <br><br>

    <button type="submit">
        Create
    </button>

</form>

@endsection