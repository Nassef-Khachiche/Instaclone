<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Instaclone</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--icon -->
    <link rel="icon" type="image/png" href="https://www.solarteam.nl/wp-content/uploads/2019/02/instagram-logo-300x300.png">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="/profile/{{auth()->user()->id}}">
                    <div><img src="https://toppng.com/uploads/preview/new-black-instagram-logo-2020-11609370162ayxbdxlffo.png" style="height: 20px; width: 39px; border-right: 2px solid #333" class="pe-3"></div>
                    <div class="ps-3">Instaclone</div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown d-flex">
                                <a class="nav-link pe-4" href="/profile/{{ auth()->user()->id }}" role="button" aria-expanded="false">
                                    <img src="data:image/png;base64,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" style="height: 25px;">
                                </a>

                                <a class="nav-link pe-4" href="/profile/{{ auth()->user()->id }}/edit" role="button" aria-expanded="false">
                                    <img src="http://avidelectronica.com/wp-content/uploads/2021/03/pencil-1.png" style="height: 26px;">
                                </a>

                                <a class="nav-link pe-4" href="/p/create" role="button" aria-expanded="false">
                                    <img src="https://www.nicepng.com/png/full/5-51611_white-plus-png-plus-sign-in-grey.png" style="height: 22px;">
                                </a>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ auth()->user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
