@extends('layouts.admin')

@section('content')

<h1>Edit Category</h1>

<form action="{{ route('categories.update', $category->id) }}" method="post">

    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name }}">

    <button type="submit">
        Update
    </button>

</form>

@endsection