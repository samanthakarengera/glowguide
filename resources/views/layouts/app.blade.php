<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GlowGuide</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header class="topbar">

    <div class="logo">
        <a href="/">
             GlowGuide
        </a>
    </div>

    <div class="auth-links">

        @auth

            <a href="/profile" class="nav-btn">
                My Profile
            </a>

            @if(auth()->user()->is_admin)

                <a href="/admin" class="nav-btn">
                    Dashboard
                </a>

            @endif

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit">
                    Logout
                </button>
            </form>

        @else

            <a href="/login" class="nav-btn">
                Log in
            </a>

            <a href="/register" class="nav-btn">
                Register
            </a>

        @endauth

    </div>

</header>


    {{-- PAGE CONTENT --}}
    <main class="container">
        @yield('content')
    </main>

    

    {{-- ADMIN BUTTON --}}
    <footer class="footer">

        <a class="admin-btn" href="/login">
            Admin Login
        </a>

    </footer>

</footer>


<style>

    .footer {
        margin-top: 50px;
        padding: 30px;
        text-align: center;
        background: #fff3f7;
        border-top: 1px solid #f3dce4;
    }

    .admin-btn {
        display: inline-block;
        padding: 10px 18px;
        background: #d982a5;
        color: white;
        border-radius: 10px;
        text-decoration: none;
        font-size: 14px;
        transition: 0.2s ease;
    }

    .admin-btn:hover {
        background: #c96f92;
        transform: translateY(-1px);
    }

</style>
    
</body>
</html>