<nav class="navbar navbar-expand-lg fixed-top bg-secondary" id="mainNav">
    <div class="container">
        <a class="" href="#page-top"><img src="" alt="logo" /></a>
        <button class="navbar_toggler navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="bi bi-postcard-heart" style="font-size: 2rem;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link nav-button ps-2 @if (Route::currentRouteName() == 'home') active @endif"
                        aria-current="page" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link nav-button ps-2" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link nav-button ps-2" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link nav-button ps-2" href="#team">Team</a></li>
                <li class="nav-item"><a class="nav-link nav-button ps-2 @if (Route::currentRouteName() == 'contacts') active @endif"
                        href="{{ route('contacts') }}">Contacts</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-button ps-2" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Articoli</a>

                    <ul class="dropNav dropdown-menu">
                        <li><a class="dropdown-item text-light hoverDrop" href="{{ route('articles.index') }}">Main</a>
                        </li>
                        <li><a class="dropdown-item text-light hoverDrop"
                                href="{{ route('articles.create') }}">Inserisci un
                                articolo</a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-button ps-2" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Benvenuto @auth {{ Auth::user()->name }}
                        @else
                        Guest @endauth
                    </a>
                    <ul class="dropNav dropdown-menu">
                        @auth
                            <!-- logout form-->
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a>
                            </li>
                            <form method="POST" action="{{ route('logout') }}" id="form-logout" class="d-none">@csrf
                                @method('POST')</form>
                        @else
                            <li><a class="dropdown-item text-light hoverDrop" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item text-light hoverDrop" href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
