@extends('layouts.admin')

@section('content')

<div class="admin-page">

    <a
        href="{{ route('faq-items.index') }}"
        class="back-button"
    >
        ← Back to FAQ Questions
    </a>


    <h1>New FAQ Question</h1>

    <p class="page-description">
        Add a question and answer to your FAQ.
    </p>


    <form
        action="{{ route('faq-items.store') }}"
        method="POST"
    >

        @csrf
-
        <div class="form-group">

            <label for="faq_category_id">
                Category
            </label>

            <select
                name="faq_category_id"
                id="faq_category_id"
                required
            >

                <option value="">
                    Select a category
                </option>

                @foreach($faq_categories as $category)

                    <option
                        value="{{ $category->id }}"
                        {{ old('faq_category_id') == $category->id ? 'selected' : '' }}
                    >
                        {{ $category->name }}
                    </option>

                @endforeach

            </select>


            @error('faq_category_id')

                <p class="error-message">
                    {{ $message }}
                </p>

            @enderror

        </div>

        <div class="form-group">

            <label for="question">
                Question
            </label>

            <input
                type="text"
                id="question"
                name="question"
                value="{{ old('question') }}"
                placeholder="For example: How can I book a provider?"
                required
            >


            @error('question')

                <p class="error-message">
                    {{ $message }}
                </p>

            @enderror

        </div>

        <div class="form-group">

            <label for="answer">
                Answer
            </label>

            <textarea
                id="answer"
                name="answer"
                rows="6"
                placeholder="Write the answer here..."
                required
            >{{ old('answer') }}</textarea>


            @error('answer')

                <p class="error-message">
                    {{ $message }}
                </p>

            @enderror

        </div>


        <button
            type="submit"
            class="primary-button"
        >
            Create FAQ Question
        </button>

    </form>

</div>

@endsection