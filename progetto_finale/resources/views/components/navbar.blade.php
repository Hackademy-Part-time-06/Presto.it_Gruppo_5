<nav class="fixed-top" id='menu'>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
    <ul>
        <li><a class="nav-link nav-button ps-2 @if (Route::currentRouteName() == 'home') active @endif" aria-current="page"
                href="{{ route('home') }}">Home</a></li>
        <li><a class='dropdown-arrow' href='#'>Articoli</a>
            <ul class='sub-menus'>
                <li><a href="{{ route('articles.index') }}">Articoli inseriti</a></li>
                <li><a href="{{ route('articles.create') }}">Inserisci un articolo</a></li>

                @if (Auth::user()->is_revisor())
                    <li>
                        <a href="{{ route('revisor.index') }}">Zona revisore
                            <span
                                class="position-absolute top-0 start-100 transale-middle badge rounded-pill bg-danger">{{ app\Models\Article::toBeRevisionatedCount }}
                                <span class="visually-hidden">unread message</span>
                            </span>
                        </a>
                    </li>
                @endif


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
                    <!-- Link al profilo utente -->
                    <li><a href="{{ route('userprofile', Auth::user()->id) }}">Profilo</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </li>
    </ul>
</nav>
