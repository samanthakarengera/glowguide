@extends('layouts.app')

@section('content')

<a href="{{ route('welcome') }}" class="back-button">
    ← Back to Homepage
</a>


<div class="faq-page">
    <div class="faq-header">
        <span>GLOWGUIDE FAQ</span>
        <h1>Frequently Asked Questions</h1>
        <p>
            Find answers to the most common questions
            about GlowGuide.
        </p>

    </div>


    @foreach($categories as $category)

        {{-- Eén categorie --}}
        <div class="faq-category">

            <h2>
                {{ $category->name }}
            </h2>


            @foreach($category->faqItems as $item)

                {{-- Eén vraag + antwoord --}}
                <div class="faq-card">

                    <h3>
                        {{ $item->question }}
                    </h3>

                    <p>
                        {{ $item->answer }}
                    </p>

                </div>

            @endforeach

        </div>

    @endforeach

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

    .faq-page {
        max-width: 850px;
        margin: 0 auto;
    }

    .faq-header {
        text-align: center;
        margin-bottom: 45px;
    }

    .faq-header span {
        color: #d982a5;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 3px;
    }

    .faq-header h1 {
        color: #444;
        font-size: 38px;
        margin: 8px 0 12px;
    }

    .faq-header p {
        color: #777;
    }

    .faq-category {
        margin-bottom: 40px;
    }

    .faq-category h2 {
        color: #d46f97;
        margin-bottom: 18px;
        font-size: 24px;
    }
    .faq-card {
        background: white;
        border: 1px solid #f2dce4;
        border-radius: 16px;
        padding: 22px 25px;
        margin-bottom: 12px;
        box-shadow: 0 4px 15px rgba(210, 130, 165, 0.08);
    }

    .faq-card h3 {
        color: #444;
        margin-bottom: 10px;
        font-size: 17px;
    }

    .faq-card p {
        color: #777;
        line-height: 1.7;
        margin: 0;
    }

</style>

@endsection