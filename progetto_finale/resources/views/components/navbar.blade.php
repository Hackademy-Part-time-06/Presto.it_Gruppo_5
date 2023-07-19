<nav class="fixed-top" id='menu'>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
    <ul>
        <li class="img-container">
            <div class="logoNav">
                <a class="navbar-brand img-container" href="/">
                    <img src="{{ url('media/Logo.png') }}" alt="Logo">
                </a>
            </div>
        </li>
        <li><a class="nav-link nav-button ps-2 @if (Route::currentRouteName() == 'home') active @endif" aria-current="page"
                href="{{ route('home') }}">{{ __('messages.navHome') }}</a></li>
        <li><a class='dropdown-arrow' href='#'>{{ __('messages.navAnnouncements') }} <i
                    class="bi bi-caret-down"></i> </a>
            <ul class='sub-menus'>
                <li><a href="{{ route('articles.index') }}">{{ __('messages.navArticlesInsert') }}</a></li>
                <li><a href="{{ route('articles.create') }}">{{ __('messages.navInsertArticles') }}</a></li>
            </ul>
        </li>
        <li><a class='dropdown-arrow' href='#'>{{ __('messages.navCategory') }}<i class="bi bi-caret-down"></i>
            </a>
            <ul class='sub-menus'>

                @foreach ($categories as $category)
                    <li><a href="{{ route('category.show', $category) }}">{{ __('messages.' . $category->name) }}</a>
                    </li>
                @endforeach

            </ul>
        </li>







        </li>
        <li><a href='#'>{{ __('messages.navAbout') }}</a></li>

        @auth
            @if (Auth::user()->is_revisor)
                <li>
                    <a href="{{ route('revisor.index') }}">{{ __('messages.navRevisor') }}
                        <span
                            class="position-absolute top-0 start-90 transale-middle badge rounded-pill bg-danger">{{ App\Models\Article::toBeRevisionatedCount() }}
                            <span class="visually-hidden">unread message</span>
                        </span>
                    </a>
                </li>
            @else
                <li><a href="{{ route('submit.revisor') }}">{{ __('messages.navWorkUs') }}</a></li>
            @endif
        @endauth



        <div class="d-flex justify-content-end">
            <div class="justify-content-end px-3">
                <li>

                    <a class="dropdown-arrow ms-2 " href="#"> {{ __('messages.navWelcome') }} @auth
                            {{ Auth::user()->name }} <i class="bi bi-caret-down"></i>
                        @else
                        Guest @endauth
                    </a>
                    <ul class="sub-menus ms-2">
                        @auth

                            <!-- logout form-->
                            <li><a href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">{{ __('messages.navLogout') }}</a>
                            </li>
                            <form method="POST" action="{{ route('logout') }}" id="form-logout" class="d-none">@csrf
                                @method('POST')</form>
                            <!-- Link al profilo utente -->
                            <li><a href="{{ route('userprofile', Auth::user()->id) }}">{{ __('messages.navProfile') }}</a>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">{{ __('messages.navLogin') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ __('messages.navRegister') }}</a></li>
                        @endauth


                    </ul>

                <li><a class='dropdown-arrow m-0' href=''><i class="bi bi-globe"></i><i
                            class="ms-2 bi bi-caret-down"></i> </a>
                    <ul class='sub-menus' id="flags-dropdown">
                        <li>
                            <x-_locale lang='it' nation='it' />
                        </li>
                        <li>
                            <x-_locale lang='gb' nation='gb' />
                        </li>
                        <li>
                            <x-_locale lang='el' nation='gr' />
                        </li>


                    </ul>
                </li>




                </li>
            </div>
        </div>

    </ul>
</nav>
