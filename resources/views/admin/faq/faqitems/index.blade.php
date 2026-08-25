@extends('layouts.admin')

@section('content')

<div class="admin-page">

    <a
        href="{{ route('admin.dashboard') }}"
        class="back-button"
    >
        ← Back to dashboard
    </a>


    <h1>FAQ Questions </h1>

    <p class="page-description">
        Manage the questions and answers shown on the FAQ page.
    </p>

    <a
        href="{{ route('faq-items.create') }}"
        class="primary-button"
    >
        + New FAQ Question
    </a>


    <div class="admin-list">

        @forelse($faq_items as $item)

            <div class="admin-card">

                <div class="card-info">

                 
                    <span class="faq-category">
                        {{ $item->faqCategory->name ?? 'No category' }}
                    </span>
                    <h3>
                        {{ $item->question }}
                    </h3>

                    <p>
                        {{ $item->answer }}
                    </p>

                </div>


                <div class="actions">

                    <a
                        href="{{ route('faq-items.edit', $item) }}"
                        class="edit-button"
                    >
                        Edit
                    </a>
                    <form
                        action="{{ route('faq-items.destroy', $item) }}"
                        method="POST"
                    >

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="delete-button"
                            onclick="return confirm('Are you sure you want to delete this FAQ question?')"
                        >
                            Delete
                        </button>

                    </form>

                </div>

            </div>

        @empty

            <div class="empty-message">
                <p>
                    No FAQ questions have been created yet.
                </p>
            </div>

        @endforelse

    </div>

</div>

@endsection