{{-- <nav class="navbar navbar-expand-lg fixed-top bg-secondary" id="mainNav">
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
                <li class="nav-item"><a class="nav-link nav-button ps-2" href="#portfolio">Categorie</a></li>
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
                <!-- Categories -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-button ps-2" href="" data-bs-toggle="dropdown"
                        aria-expanded="false">Categories</a>

                    <ul class="dropNav dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item text-light hoverDrop"
                                    href="{{ route('category.show', $category) }}">{{ $category->name }}</a></li>
                        @endforeach
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
                            <li><a class="dropdown-item hoverDrop text-light" href="#"
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
</nav> --}}





<nav class="fixed-top" id='menu'>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
    <ul>
        <li><a class="nav-link nav-button ps-2 @if (Route::currentRouteName() == 'home') active @endif" aria-current="page"
                href="{{ route('home') }}">Home</a></li>
        <li><a class='dropdown-arrow' href='#'>Articoli</a>
            <ul class='sub-menus'>
                <li><a href="{{ route('articles.index') }}">Articoli inseriti</a></li>
                <li><a href="{{ route('articles.create') }}">Inserisci un articolo</a></li>

            </ul>
        </li>
        <li><a class='dropdown-arrow' href='#'>Categorie</a>
            <ul class='sub-menus'>

                @foreach ($categories as $category)
                    <li><a href="{{ route('category.show', $category) }}">{{ $category->name }}</a></li>
                @endforeach

            </ul>
        </li>
        <li><a href='#'>Contact Us</a></li>
        <li><a href='#'>About</a></li>

        <li>
            <a class="dropdown-arrow" href="#">Benvenuto @auth {{ Auth::user()->name }}
                @else
                Guest @endauth
            </a>
            <ul class="sub-menus">
                @auth
                    <!-- logout form-->
                    <li><a href="#"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}" id="form-logout" class="d-none">@csrf
                        @method('POST')</form>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </li>
    </ul>
</nav>