@extends('layouts.admin')

@section('content')

<div class="admin-page">

    {{-- Terug naar de lijst met FAQ categorieën --}}
    <a href="{{ route('faq-categories.index') }}" class="back-button">
        ← Back to FAQ Categories
    </a>

    <h1>Edit FAQ Category 💗</h1>

    <p class="page-description">
        Change the name of this FAQ category.
    </p>

    {{-- Formulier om de categorie aan te passen --}}
    <form
        action="{{ route('faq-categories.update', $faq_category) }}"
        method="POST"
    >

        @csrf

        {{-- put voor bestaande data aan te passen --}}
        @method('PUT')

        <div class="form-group">

            <label for="name">
                Category name
            </label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $faq_category->name) }}"
                required
            >

            @error('name')
                <p class="error-message">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <button type="submit" class="primary-button">
            Update Category
        </button>

    </form>

</div>

@endsection