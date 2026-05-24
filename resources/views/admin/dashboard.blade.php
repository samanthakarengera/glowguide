@extends('layouts.admin')

@section('content')

<h1 style="margin-bottom:30px;">
    GlowGuide Admin Dashboard
</h1>

<div style="
display:grid;
grid-template-columns:repeat(2, 1fr);
gap:20px;
max-width:700px;
">

    {{-- Providers --}}

    <a href="{{ route('providers.index') }}"
       style="
       background:#ffd6e7;
       padding:30px;
       border-radius:20px;
       text-decoration:none;
       color:black;
       font-weight:bold;
       ">

        Manage Providers

    </a>

    {{-- Categories --}}

    <a href="{{ route('categories.index') }}"
       style="
       background:#ffd6e7;
       padding:30px;
       border-radius:20px;
       text-decoration:none;
       color:black;
       font-weight:bold;
       ">

        Manage Categories

    </a>

    {{-- FAQ Categories --}}

    <a href="/admin/faq-categories"
       style="
       background:#ffd6e7;
       padding:30px;
       border-radius:20px;
       text-decoration:none;
       color:black;
       font-weight:bold;
       ">

        FAQ Categories

    </a>

    {{-- FAQ Questions --}}

    <a href="/admin/faq-items"
       style="
       background:#ffd6e7;
       padding:30px;
       border-radius:20px;
       text-decoration:none;
       color:black;
       font-weight:bold;
       ">

        FAQ Questions

    </a>

</div>

@endsection