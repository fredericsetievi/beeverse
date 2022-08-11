<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <a href="{{ url('/') }}">
                <i class="bi bi-person-hearts text-white"></i>
                <span class="fw-bold fs-5 ms-2 text-white">Beeverse</span>
            </a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link {{ request()->routeIs('home_page') ? 'active' : '' }}"
                        href="{{ route('home_page') }}">@lang('word.connect_friends')</a></li>
                <li><a class="nav-link {{ request()->is('avatar*') ? 'active' : '' }}"
                        href="{{ route('avatar_page') }}">@lang('word.avatar')</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <div class="d-flex">
            <ul class="d-flex navbar">
                <li class="nav-link d-flex">
                    <?php
                    $lang = App::getLocale();
                    ?>
                    <div class="d-flex justify-content-center align-items-center">
                        <a class="nav-link px-1 {{ ($lang != null) & ($lang == 'en') ? 'active' : '' }}"
                            href="/lang/en">EN</a>
                        <span class="px-1">|</span>
                        <a class="nav-link px-1  {{ ($lang != null) & ($lang == 'id') ? 'active' : '' }}"
                            href="/lang/id">ID</a>
                    </div>
                </li>

                @if (!Auth::check())
                    @if (Route::has('login'))
                        <button type="button" class="btn btn-green">
                            <a href="{{ route('login_page') }}" style="padding: 0px">@lang('word.login')</a>
                        </button>
                    @endif

                    @if (Route::has('register'))
                        <button type="button" class="btn btn-outline-secondary ms-2">
                            <a href="{{ route('register_page') }}" style="padding: 0px">@lang('word.register')</a>
                        </button>
                    @endif
                @else
                    <img src="{{ asset('storage/images/user/' . auth()->user()->image) }}" alt="profile-picture"
                        class="rounded-circle img-fluid"
                        style="width: 40px; height: 40px; margin-right: -40px; margin-left: 40px;">
                    <li class="nav-link dropdown">
                        <a href=""><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="{{ route('profile_page') }}">@lang('word.my_profile')</a>
                            </li>
                            <li>
                                <a href="{{ route('my_friend_page') }}">@lang('word.my_friend')</a>
                            </li>
                            <li>
                                <a href="{{ route('my_avatar_page') }}">@lang('word.my_avatar')</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    @lang('word.logout')
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>
