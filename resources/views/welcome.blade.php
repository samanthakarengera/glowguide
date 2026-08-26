@extends('layouts.app')

@section('content')



<div class="welcome-page">

    <div class="intro">

        <h1>Welcome to GlowGuide</h1>

        <p>
            Discover beauty providers in your area
            and find the perfect beauty service for you.
        </p>

        <a href="/register" class="intro-button">
            Get Started
        </a>

    </div>



    <div class="featured">

        <h2>
            Featured Categories
        </h2>

        <p class="featured-text">
            Explore our most popular beauty services.
        </p>


        <div class="category-grid">

            @foreach($categories as $category)

                {{-- Klik op een categorie om de providers te bekijken --}}
                <a
                    href="{{ route('categories.show', $category) }}"
                    class="category-card"
                >

                    <h3>
                        {{ ucfirst($category->name) }}
                    </h3>

                    <p>
                        Discover {{ strtolower($category->name) }}
                        providers.
                    </p>

                </a>

            @endforeach

        </div>

    </div>



    {{-- =========================
         FAQ + CONTACT
         ========================= --}}

    <div class="home-links">


        {{-- FAQ --}}
        <div class="home-link-card">

            <h2>
                Frequently Asked Questions
            </h2>

            <p>
                Have a question? Find the answer on our FAQ page.
            </p>

            <a
                href="{{ route('faq') }}"
                class="home-link-button"
            >
                View FAQ
            </a>

        </div>


        {{-- CONTACT --}}
        <div class="home-link-card">

            <h2>
                Contact GlowGuide
            </h2>

            <p>
                Do you have a question or need help?
                Get in touch with us.
            </p>

            <a
                href="{{ route('contact') }}"
                class="home-link-button"
            >
                Contact Us
            </a>

        </div>

    </div>


</div>
<style>

    /* CSS */

    /* HOMEPAGE */
    .welcome-page {
        width: 100%;
    }
    .intro {
        text-align: center;
        padding: 70px 20px;
        background: #fff0f5;
        border-radius: 25px;
        margin-bottom: 50px;
    }
    .intro h1 {
        font-size: 45px;
        color: #d982a5;
        margin-bottom: 15px;
    }
    .intro p {
        color: #666;
        max-width: 650px;
        margin: 0 auto 25px;
        font-size: 17px;
    }
    .intro-button {
        display: inline-block;
        padding: 12px 24px;
        background: #d982a5;
        color: white;
        text-decoration: none;
        border-radius: 12px;
    }
    .intro-button:hover {
        background: #c96f92;
    }

    /*FEATURED CATEGORIES*/

    .featured {
        margin-bottom: 55px;
    }
    .featured h2 {
        text-align: center;
        color: #444;
        margin-bottom: 10px;
    }
    .featured-text {
        text-align: center;
        color: #777;
        margin-bottom: 30px;
    }
    .category-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
    .category-card {
        background: #fff0f5;
        border: 1px solid #f2d1dd;
        border-radius: 18px;
        padding: 30px 20px;
        text-align: center;
        text-decoration: none;
        transition: 0.2s;
    }
    .category-card:hover {
        background: #ffe1ec;
        transform: translateY(-4px);
    }
    .category-card h3 {
        color: #d46f97;
        margin-bottom: 8px;
    }
    .category-card p {
        color: #777;
        font-size: 14px;
    }

    /* FAQ + CONTACT*/

    .home-links {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
        margin-top: 30px;
    }
    .home-link-card {
        background: white;
        border: 1px solid #f2dce4;
        border-radius: 18px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 5px 18px rgba(210,130,165,0.08);
    }
    .home-link-card h2 {
        color: #d46f97;
        margin-bottom: 10px;
    }
    .home-link-card p {
        color: #777;
        margin-bottom: 20px;
    }
    .home-link-button {
        display: inline-block;
        padding: 10px 18px;
        background: #d982a5;
        color: white;
        border-radius: 10px;
        text-decoration: none;
    }
    .home-link-button:hover {
        background: #c96f92;
    }

    /* MOBILE */

    @media (max-width: 700px) {
        .hero h1 {
            font-size: 32px;
        }
        .category-grid {
            grid-template-columns: 1fr;
        }
        .home-links {
            grid-template-columns: 1fr;
        }
    }
</style>

@endsection