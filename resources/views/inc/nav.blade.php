<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container">
            <h1 class="navbar-brand" href="#">Caroline Greene</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard ">Dashboard</a>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}" tabindex="-1" aria-disabled="true">Login</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
