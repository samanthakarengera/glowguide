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
            <a href="/">GlowGuide</a>
        </div>

        <div class="auth-links">

            @auth
                
                <form method="POST" action="/dashboard">
                    @csrf

                    <button type="submit">
                        Dashboard
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit">
                        Logout
                    </button>
                </form>
                @else
                <form method="POST" action="/login">
                    @csrf

                    <button type="submit">
                        Log in
                    </button>
                </form>
                <form method="POST" action="/login">
                    @csrf

                    <button type="submit">
                        Register
                    </button>
                </form>
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