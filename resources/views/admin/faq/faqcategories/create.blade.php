@extends('layouts.admin')

@section('content')

<h1>Create FAQ Category</h1>

<form action="/admin/faq/faqcategories" method="post">

    @csrf

    <label>Name</label>

    <input type="text" name="name">

    <button type="submit">
        Create
    </button>

</form>

@endsection