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
                <a href="/dashboard">Dashboard</a>

                <form method="POST" action="/">
                    @csrf
                    <button>Logout</button>
                </form>
            @else
                <a href="/login">Login</a>
                <a href="/profile">Register</a>
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