<header>
    <nav class="navbar navbar-light navbar-expand-md shadow-sm mb-4 bg-secondary">
        <div class="container">
            <a href="/" class="navbar-brand text-decoration-none">Scrybble</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarText">
                <ul class="navbar-nav mr-auto">
                    @auth
                        <li class="nav-item">
                            <a href="/profile" class="nav-link">{{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link">Logout</button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
