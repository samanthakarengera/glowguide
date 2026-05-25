@extends('layouts.admin')

@section('content')

<a href="{{ url()->previous() }}" class="back-btn">
    ← Go Back
</a>

<h1>Providers</h1>

<a href="{{ route('providers.create') }}">
    + New Provider
</a>

<br><br>

@foreach($providers as $provider)

    <div class="category-row">

        <div>
            <strong>{{ $provider->name }}</strong>
            <br>
            {{ $provider->category->name }}
            <br>
            {{ $provider->city }}
        </div>

        <div class="actions">

            <a href="{{ route('providers.edit', $provider->id) }}">
                Edit
            </a>

            <form action="{{ route('providers.destroy', $provider->id) }}" method="post">

                @csrf
                @method('DELETE')

                <button type="submit">
                    Delete
                </button>

            </form>

        </div>

    </div>

@endforeach

@endsection