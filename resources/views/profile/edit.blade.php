@extends('layouts.app')

@section('title', 'My Profile | GlowGuide')

@section('content')

<div class="profile-page">

    {{-- Pagina introductie --}}
    <div class="profile-heading">
        <h1>My Profile </h1>

        <p>
            Manage your personal information and tell us
            a little about how you use GlowGuide.
        </p>

    </div>


    {{-- Succesmelding --}}
    @if(session('success'))

        <div class="profile-success">
            {{ session('success') }}
        </div>

    @endif


    {{-- Validatiefouten --}}
    @if($errors->any())

        <div class="profile-errors">
            <strong>Please check the following:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="profile-card">

        <form
            method="POST"
            action="{{ route('profile.update') }}"
        >

            @csrf
            @method('PATCH')


            {{-- USERNAME --}}
            <div class="profile-field">

                <label for="username">
                    Username
                </label>

                <input
                    id="username"
                    type="text"
                    name="username"
                    value="{{ old('username', auth()->user()->username) }}"
                    placeholder="Choose your username"
                    required
                >

            </div>


            {{-- BIRTHDAY --}}
            <div class="profile-field">

                <label for="birthday">
                    Birthday
                </label>

                <input
                    id="birthday"
                    type="date"
                    name="birthday"
                    value="{{ old('birthday', auth()->user()->birthday) }}"
                >

            </div>


            {{-- CITY --}}
            <div class="profile-field">

                <label for="city">
                    City
                </label>

                <input
                    id="city"
                    type="text"
                    name="city"
                    value="{{ old('city', auth()->user()->city) }}"
                    placeholder="For example Brussels"
                >

            </div>


            {{-- ROLE --}}
            <div class="profile-field">

                <label for="role">
                    How do you use GlowGuide?
                </label>

                <select
                    id="role"
                    name="role"
                    required
                >

                    <option
                        value="customer"
                        {{ old('role', auth()->user()->role) === 'customer' ? 'selected' : '' }}
                    >
                        💗 I'm looking for beauty services
                    </option>

                    <option
                        value="provider"
                        {{ old('role', auth()->user()->role) === 'provider' ? 'selected' : '' }}
                    >
                        ✨ I'm a beauty service provider
                    </option>

                </select>

                <small>
                    You can change this later in your profile.
                </small>

            </div>


            {{-- SAVE --}}
            <div class="profile-actions">

                <button
                    type="submit"
                    class="profile-save"
                >
                    Save Changes
                </button>

                <a
                    href="{{ route('welcome') }}"
                    class="profile-back"
                >
                    Back to GlowGuide
                </a>

            </div>

        </form>

    </div>

</div>

@endsection