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

                <a href="/admin/dashboard" class="nav-btn">
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

</body>
</html>