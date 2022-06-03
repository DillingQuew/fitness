<!doctype html>
<html lang="ru ">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Финтес зал@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('js/chief-slider.css')}}">
    <script src="{{ asset('js/chief-slider.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body class="background-back" style="">
    <div id="app">
            <nav class=" navbar navbar-expand-md header-top" style="border-bottom:1px solid red;">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <div class="logo " style="">
                            <img class="" src="/images/logo/logo_custom.svg" alt="My SVG Icon" style="width: 100px; z-index:2; padding:0;">
                        </div>
                    </a>
                    <button class="navbar-toggler main-colors" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="{{ __('Toggle navigation') }}" style="padding:0px 5px 5px 0px;">
                    <span class="navbar-toggler-icon">
                        <svg viewBox="0 0 100 80" width="40" height="40">
                              <rect fill="white" width="100" height="10"></rect>
                              <rect fill="white" y="30" width="100" height="10"></rect>
                              <rect fill="white" y="60" width="100" height="10"></rect>
                            </svg>
                    </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/about" style="color: var(--main-color)">
                                    Наш зал
                                </a>
                            </li>
                            @auth

                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color: var(--main-color);">
                                        Войти
                                    </a>
                                </li>
                            @endguest

                            @auth
                                @admin
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}" style="color: var(--main-color);">
                                        Заявки
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" style="color: var(--main-color);" href="{{ route('person.orders.index') }}">
                                        Мои заказы
                                    </a>
                                </li>
                                @endadmin
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('get-logout') }}" style="color: var(--main-color);">
                                        Выйти
                                    </a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        @yield('content')
    </div>
</body>
</html>
