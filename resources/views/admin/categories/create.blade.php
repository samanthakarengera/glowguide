@extends('layouts.admin')

@section('content')

<a href="{{ url()->previous() }}" class="back-btn">
    ← Go Back
</a>

<h1>Create Category</h1>

<form action="{{ route('categories.store') }}" method="post">

    @csrf

    <label for="name">Category name</label>

    <input type="text" name="name" placeholder="Category name">

    <button type="submit">
        Create
    </button>

</form>

@endsection
