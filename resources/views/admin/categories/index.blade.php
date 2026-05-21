@extends('layouts.admin')

@section('content')

<h1>Categories</h1>

<a href="{{ route('categories.create') }}">
    + New Category
</a>

<br><br>

@foreach($categories as $category)

    <div class="category-row">

        <strong>{{ $category->name }}</strong>

        <div class="actions">

            {{-- EDIT BUTTON --}}
            <a href="{{ route('categories.edit', $category->id) }}">
                Edit
            </a>

            {{-- DELETE BUTTON --}}
            <form action="{{ route('categories.destroy', $category->id) }}" method="post">

                @csrf
                @method('DELETE')

                <button type="submit">
                    Delete
                </button>

            </form>

        </div>

    </div>

@endforeach

@endsection