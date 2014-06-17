<nav>
    <ul>
        <li><a href="/games">Games</a></li>
        @if (Auth::guest())
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>
        @else
            <li>{{ link_to_profile('View Profile') }}</li>
            <li><a href="/logout">Logout</a></li>
        @endif
    </ul>
</nav>