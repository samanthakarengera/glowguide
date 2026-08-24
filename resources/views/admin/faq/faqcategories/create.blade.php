@extends('layouts.admin')

@section('content')

<div class="admin-page">

    <a href="{{ route('faq-categories.index') }}" class="back-button">
        ← Back to FAQ Categories
    </a>

    <h1>New FAQ Category </h1>

    <form action="{{ route('faq-categories.store') }}" method="POST">

        @csrf

        <div class="form-group">

            <label for="name">
                Category name
            </label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required
            >

            @error('name')
                <p class="error-message">{{ $message }}</p>
            @enderror

        </div>

        <button type="submit" class="primary-button">
            Create Category
        </button>

    </form>

</div>

@endsection