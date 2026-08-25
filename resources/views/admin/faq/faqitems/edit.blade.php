@extends('layouts.admin')

@section('content')

<div class="admin-page">

    {{-- Terug naar de lijst met FAQ vragen --}}
    <a href="{{ route('faq-items.index') }}" class="back-button">
        ← Back to FAQ Questions
    </a>

    <h1>Edit FAQ Question 💗</h1>

    <p class="page-description">
        Change the question, answer or category.
    </p>

    {{-- Formulier om de FAQ vraag aan te passen --}}
    <form
        action="{{ route('faq-items.update', $faq_item) }}"
        method="POST"
    >

        @csrf

        {{-- PUT is nodig omdat we bestaande data aanpassen --}}
        @method('PUT')


        {{-- FAQ CATEGORY --}}
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
                        {{ old('faq_category_id', $faq_item->faq_category_id) == $category->id ? 'selected' : '' }}
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


        {{-- QUESTION --}}
        <div class="form-group">

            <label for="question">
                Question
            </label>

            <input
                type="text"
                id="question"
                name="question"
                value="{{ old('question', $faq_item->question) }}"
                required
            >

            @error('question')
                <p class="error-message">
                    {{ $message }}
                </p>
            @enderror

        </div>


        {{-- ANSWER --}}
        <div class="form-group">

            <label for="answer">
                Answer
            </label>

            <textarea
                id="answer"
                name="answer"
                rows="6"
                required
            >{{ old('answer', $faq_item->answer) }}</textarea>

            @error('answer')
                <p class="error-message">
                    {{ $message }}
                </p>
            @enderror

        </div>


        <button type="submit" class="primary-button">
            Update FAQ Question
        </button>

    </form>

</div>

@endsection