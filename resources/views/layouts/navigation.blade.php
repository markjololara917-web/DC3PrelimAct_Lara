<a href="/">Home</a>
<a href="{{ route('contact') }}">Contact Us</a>

@guest
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
@endguest

@auth
    <a href="{{ route('showroom') }}">Showroom</a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endauth