@extends('layouts.admin')

@section('content')

<h1>Create FAQ Question</h1>

<form action="/admin/faq/faqitems" method="post">

    @csrf

    <label>Category</label>

    <select name="faq_category_id">

        @foreach($categories as $category)

            <option value="{{ $category->id }}">

                {{ $category->name }}

            </option>

        @endforeach

    </select>

    <label>Question</label>

    <input type="text" name="question">

    <label>Answer</label>

    <textarea name="answer"></textarea>

    <button type="submit">
        Create
    </button>

</form>

@endsection