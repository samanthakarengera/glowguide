@extends('layouts.app')

@section('content')

<a href="{{ route('welcome') }}" class="back-button">
    ← Back to Homepage
</a>


<div class="category-page">

    <div class="category-header">

        <span>GLOWGUIDE CATEGORY</span>

        <h1>
            {{ ucfirst($category->name) }}
        </h1>

        <p>
            Discover beauty providers offering
            {{ strtolower($category->name) }} services.
        </p>

    </div>


    {{-- Providers binnen deze categorie --}}
    <div class="provider-grid">

        @foreach($providers as $provider)

            <div class="provider-card">

                <h3>
                    {{ $provider->name }}
                </h3>

                <p>
                    📍 {{ $provider->city }}
                </p>


                {{-- Naar provider detail --}}
                <a
                    href="{{ route('providers.show', $provider->id) }}"
                    class="provider-button"
                >
                    View Provider
                </a>

            </div>

        @endforeach

    </div>

</div>


<style>
    .back-button {
        display: inline-block;
        margin-bottom: 30px;
        padding: 10px 16px;
        background: #fff0f5;
        color: #d46f97;
        border: 1px solid #f2d1dd;
        border-radius: 10px;
        text-decoration: none;
        transition: 0.2s ease;
    }

    .back-button:hover {
        background: #ffe1ec;
        transform: translateY(-2px);
    }

    .category-page {
        max-width: 1000px;
        margin: 0 auto;
    }

    .category-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .category-header span {
        color: #d982a5;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 3px;
    }

    .category-header h1 {
        color: #444;
        font-size: 38px;
        margin: 8px 0 12px;
    }

    .category-header p {
        color: #777;
    }

    .provider-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 22px;
    }

    .provider-card {
        background: #fff0f5;
        border: 1px solid #f2d1dd;
        border-radius: 18px;
        padding: 25px;
        box-shadow: 0 5px 18px rgba(210, 130, 165, 0.08);
        transition: 0.2s ease;
    }

    .provider-card:hover {
        transform: translateY(-4px);
        background: #ffe5ee;
        box-shadow: 0 10px 25px rgba(210, 130, 165, 0.14);
    }

    .provider-card h3 {
        color: #d46f97;
        margin-bottom: 8px;
    }

    .provider-card p {
        color: #777;
        margin-bottom: 18px;
    }

    .provider-button {
        display: inline-block;
        padding: 9px 16px;
        background: #d982a5;
        color: white;
        border-radius: 10px;
        text-decoration: none;
        font-size: 14px;
        transition: 0.2s ease;
    }

    .provider-button:hover {
        background: #c96f92;
    }

</style>

@endsection