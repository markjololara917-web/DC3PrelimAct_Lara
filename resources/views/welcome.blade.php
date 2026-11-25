
<!DOCTYPE html>
<html>
<head>
    <title>DC3Activity</title>
</head>
<body>

    <nav>
        <h2>DC3Activity</h2>

        <a href="/">Home</a>
        <a href="{{ route('contact') }}">Contact Us</a>

        @auth
            <a href="{{ route('showroom') }}">Showroom</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </nav>

    <hr>

    <h1>Welcome to DC3Activity</h1>
    <p>Welcome to our website!</p>

    <a href="{{ route('contact') }}">Contact Us</a>

</body>
</html>
