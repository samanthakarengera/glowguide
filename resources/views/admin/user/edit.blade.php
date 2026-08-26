@extends('layouts.admin')

@section('content')

<div style="
    max-width:700px;
    margin:0 auto;
">

    <a href="{{ route('admin.user.index') }}" style="
        display:inline-block;
        margin-bottom:25px;
        background:#ffd6e7;
        color:#b85c82;
        padding:10px 16px;
        border-radius:10px;
        text-decoration:none;
    ">
        ← Back to Users
    </a>


    <div style="
        background:white;
        border:1px solid #f1dce4;
        border-radius:20px;
        padding:30px;
        box-shadow:0 8px 25px rgba(210,130,165,0.08);
    ">

        <h1 style="
            color:#d982a5;
            margin-bottom:25px;
        ">
            Edit User
        </h1>


        <form
            method="POST"
            action="{{ route('admin.users.update', $user) }}"
        >

            @csrf
            @method('PUT')


            {{-- Username --}}
            <div style="margin-bottom:20px;">

                <label>
                    Username
                </label>

                <input
                    type="text"
                    name="username"
                    value="{{ old('username', $user->username ?? $user->name) }}"
                    required
                    style="
                        width:100%;
                        padding:12px;
                        margin-top:7px;
                        border:1px solid #ead5dd;
                        border-radius:10px;
                    "
                >

            </div>


            {{-- Email --}}
            <div style="margin-bottom:20px;">

                <label>
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email', $user->email) }}"
                    required
                    style="
                        width:100%;
                        padding:12px;
                        margin-top:7px;
                        border:1px solid #ead5dd;
                        border-radius:10px;
                    "
                >

            </div>


            {{-- Role --}}
            <div style="margin-bottom:20px;">

                <label>
                    Role
                </label>

                <select
                    name="role"
                    required
                    style="
                        width:100%;
                        padding:12px;
                        margin-top:7px;
                        border:1px solid #ead5dd;
                        border-radius:10px;
                    "
                >

                    <option
                        value="client"
                        {{ $user->role === 'client' ? 'selected' : '' }}
                    >
                        Client
                    </option>

                    <option
                        value="provider"
                        {{ $user->role === 'provider' ? 'selected' : '' }}
                    >
                        Provider
                    </option>

                    <option
                        value="admin"
                        {{ $user->role === 'admin' ? 'selected' : '' }}
                    >
                        Admin
                    </option>

                </select>

            </div>


            {{-- Password --}}
            <div style="margin-bottom:25px;">

                <label>
                    New Password
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="Leave empty to keep current password"
                    minlength="8"
                    style="
                        width:100%;
                        padding:12px;
                        margin-top:7px;
                        border:1px solid #ead5dd;
                        border-radius:10px;
                    "
                >

                <small style="color:#999;">
                    Leave this empty if you do not want to change the password.
                </small>

            </div>


            <button type="submit" style="
                background:#d982a5;
                color:white;
                border:none;
                padding:12px 22px;
                border-radius:10px;
                cursor:pointer;
                font-weight:bold;
            ">
                Save Changes
            </button>

        </form>

    </div>

</div>

@endsection