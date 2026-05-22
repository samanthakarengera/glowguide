@extends('layouts.admin')

@section('content')

<h1>Admin Dashboard</h1>

<p>Welkom admin!</p>

<div style="display:flex; gap:10px; flex-wrap:wrap;">

    <a href="{{ route('providers.index') }}">
        Manage Providers
    </a>

    <a href="{{ route('categories.index') }}">
        Manage Categories
    </a>

    <a href="#">
        FAQ (coming soon)
    </a>

</div>

@endsection