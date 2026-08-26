@extends('layouts.admin')

@section('content')

<div style="
    max-width:1100px;
    margin:0 auto;
">

    <a href="{{ route('admin.dashboard') }}" style="
        display:inline-block;
        margin-bottom:25px;
        background:#ffd6e7;
        color:#b85c82;
        padding:10px 16px;
        border-radius:10px;
        text-decoration:none;
    ">
        ← Back to Dashboard
    </a>


    <h1 style="
        color:#d982a5;
        margin-bottom:10px;
    ">
        Manage Users
    </h1>

    <p style="
        color:#777;
        margin-bottom:30px;
    ">
        Manage GlowGuide accounts and user roles.
    </p>


    @if(session('success'))

        <div style="
            background:#f4fbf6;
            border:1px solid #cfe8d5;
            color:#4d8058;
            padding:12px;
            border-radius:10px;
            margin-bottom:20px;
        ">
            {{ session('success') }}
        </div>

    @endif


    @foreach($users as $user)

        <div style="
            background:white;
            border:1px solid #f1dce4;
            border-radius:16px;
            padding:20px;
            margin-bottom:15px;
            box-shadow:0 4px 15px rgba(210,130,165,0.08);
        ">

            <h2 style="
                margin-bottom:5px;
                color:#444;
            ">
                {{ $user->username ?? $user->name }}
            </h2>

            <p style="color:#777;">
                {{ $user->email }}
            </p>

            <p style="
                color:#d46f97;
                font-weight:bold;
            ">
                Role: {{ ucfirst($user->role) }}
            </p>


            <div style="
                display:flex;
                gap:10px;
                flex-wrap:wrap;
                margin-top:15px;
            ">

                {{-- Edit gebruiker --}}
                <a href="{{ route('admin.user.edit', $user) }}" style="
                    background:#ffd6e7;
                    color:#b85c82;
                    padding:9px 14px;
                    border-radius:9px;
                    text-decoration:none;
                ">
                    Edit
                </a>


                {{-- Delete gebruiker --}}
                <form
                    method="POST"
                    action="{{ route('admin.users.destroy', $user) }}"
                >

                    @csrf
                    @method('DELETE')

                    <button type="submit" style="
                        background:#fff0f0;
                        color:#a05050;
                        border:1px solid #f0cccc;
                        padding:9px 14px;
                        border-radius:9px;
                        cursor:pointer;
                    "
                    onclick="return confirm('Are you sure you want to delete this user?')">

                        Delete

                    </button>

                </form>

            </div>

        </div>

    @endforeach

</div>

@endsection