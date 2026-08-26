@extends('layouts.app')

@section('content')

<a href="{{ route('welcome') }}" class="back-button">
    ← Back to Homepage
</a>


<div class="contact-page">

    <div class="contact-header">
        <span>GET IN TOUCH</span>

        <h1>Contact GlowGuide</h1>

        <p>
            Have a question or need some help?
            Send us a message and we'll get back to you.
        </p>
    </div>


    {{-- Succesmelding na het versturen --}}
    @if(session('success'))

        <div class="success-message">
            {{ session('success') }}
        </div>

    @endif

    <div class="contact-card">

        <form method="POST" action="/contact">

            @csrf

            <div class="form-group">

                <label for="message">
                    Your message
                </label>

                <textarea
                    id="message"
                    name="message"
                    placeholder="Write your message here..."
                    required
                ></textarea>

            </div>


            <button type="submit" class="contact-button">
                Send Message
            </button>

        </form>

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

    .contact-page {
        max-width: 750px;
        margin: 0 auto;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 35px;
    }

    .contact-header span {
        color: #d982a5;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 3px;
    }

    .contact-header h1 {
        color: #444;
        font-size: 38px;
        margin: 8px 0 12px;
    }

    .contact-header p {
        color: #777;
        line-height: 1.7;
    }

    .contact-card {
        background: white;
        border: 1px solid #f1dce4;
        border-radius: 22px;
        padding: 35px;
        box-shadow: 0 8px 25px rgba(210, 130, 165, 0.10);
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #555;
        font-weight: 600;
    }

    .form-group textarea {
        width: 100%;
        min-height: 180px;
        padding: 14px;
        border: 1px solid #ead5dd;
        border-radius: 12px;
        background: #fffafa;
        resize: vertical;
        outline: none;
    }

    .form-group textarea:focus {
        border-color: #d982a5;
        box-shadow: 0 0 0 3px rgba(217, 130, 165, 0.12);
    }

    .contact-button {
        border: none;
        background: #d982a5;
        color: white;
        padding: 12px 22px;
        border-radius: 11px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .contact-button:hover {
        background: #c96f92;
        transform: translateY(-1px);
    }
    .success-message {
        margin-bottom: 20px;
        padding: 14px 18px;
        border-radius: 12px;
        background: #f4fbf6;
        border: 1px solid #cfe8d5;
        color: #4d8058;
    }

</style>

@endsection