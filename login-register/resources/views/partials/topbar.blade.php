<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::routeIs('landing') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('landing') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            @if (Auth::guest())
                <li class="nav-item {{ Request::routeIs('login') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item {{ Request::routeIs('register') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            @endif
        </ul>
    </div>
</nav>