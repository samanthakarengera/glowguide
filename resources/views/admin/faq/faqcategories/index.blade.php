@extends('layouts.admin')

@section('content')

<div class="admin-page">

    <a href="{{ route('admin.dashboard') }}" class="back-button">
        ← Back to dashboard
    </a>

    <h1>FAQ Categories</h1>

    <p class="page-description">
        Manage the categories used for your FAQ questions.
    </p>

    <a
        href="{{ route('faq-categories.create') }}"
        class="primary-button"
    >
        + New Category
    </a>


    <div class="admin-list">

        @forelse($faq_categories as $category)

            <div class="admin-card">

                <div class="card-info">
                    <h3>
                        {{ $category->name }}
                    </h3>

                </div>


                <div class="actions">

                
                    <a
                        href="{{ route('faq-categories.edit', $category) }}"
                        class="edit-button"
                    >
                        Edit
                    </a>

                    <form
                        action="{{ route('faq-categories.destroy', $category) }}"
                        method="POST"
                    >

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="delete-button"
                            onclick="return confirm('Are you sure you want to delete this category?')"
                        >
                            Delete
                        </button>

                    </form>

                </div>

            </div>

        @empty

            <div class="empty-message">
                <p>No FAQ categories have been created yet.</p>
            </div>

        @endforelse

    </div>

</div>

@endsection