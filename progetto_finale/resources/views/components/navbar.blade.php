<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link @if (Route::currentRouteName() == 'home') active @endif"
                        aria-current="page" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                <li class="nav-item"><a class="nav-link @if (Route::currentRouteName() == 'contacts') active @endif"
                        href="{{ route('contacts') }}">Contacts</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Articoli</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('articles.index') }}">Main</a></li>
                        <li><a class="dropdown-item" href="{{ route('articles.create') }}">Inserisci un articolo</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</nav>




<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
            aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="#">Centered nav</a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'home') active @endif" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'contacts') active @endif"
                        href="{{ route('contacts') }}">Contacts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Articoli</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('articles.index') }}">Main</a></li>
                        <li><a class="dropdown-item" href="{{ route('articles.create') }}">Inserisci un articolo</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Benvenuto @auth {{ Auth::user()->name }}
                        @else
                        Guest @endauth
                    </a>
                    <ul class="dropdown-menu">
                        @auth
                            <!-- logout form-->
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a>
                            </li>
                            <form method="POST" action="{{ route('logout') }}" id="form-logout" class="d-none">@csrf
                                @method('POST')</form>
                        @else
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
