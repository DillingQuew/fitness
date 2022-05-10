<!doctype html>
<html lang="ru ">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Интернет Магазин: @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="background-back" style="min-height: 100vh;">
    <div id="app">
        <nav class="container navbar navbar-expand-md header-top" style=" background: transparent;">
            <div class="container glass">
                <a class="navbar-brand" href="{{ route('index') }}">
                    {{--                    {{ config('app.name', 'Laravel') }}--}}
                    {{--                    min-width: 20px; min-height: 20px; border: 2px solid black; border-radius: 20px;--}}
                    <div class="">
                        <img src="/public/images/logo.png" alt="" style="width: 100px">
                        {{--                            <h1 style="margin:5px; color: white">СКАЗКА</h1>--}}
                    </div>
                </a>
                <button class="navbar-toggler main-colors" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="padding:0px 5px 5px 0px;">
                    <span class="navbar-toggler-icon">
                         <img src="public/images/svg/list-menu-hand-drawn-symbol-of-three-thin-rectangles-outlines-svgrepo-com.svg" alt="My SVG Icon" style="width: 35px; padding:0;">
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/" style="color: #cc3399">
                                <img class="main-colors" src="public/images/svg/list-paper-hand-drawn-symbol-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                О нас
                            </a>
                        </li>

                        <li class="nav-item" @routeactive('basket*')>
                            <a class="nav-link" href="{{ route('basket') }}" style="color: #cc3399;">
                                <img class="main-colors" src="public/images/svg/shopping-bag-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                В корзину
                            </a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color: #cc3399;">
                                    <img class="main-colors" src="public/images/svg/next-user-hand-drawn-interface-symbol-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                    Войти
                                </a>
                            </li>
                        @endguest

                        @auth
                            @admin
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}" style="color: #cc3399;">
                                    <img class="main-colors" src="public/images/svg/admin-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                    Панель администратора
                                </a>
                            </li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('person.orders.index') }}">Мои заказы</a></li>
                            @endadmin
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('get-logout') }}" style="color: #cc3399;">
                                    <img class="main-colors" src="public/images/svg/exit-svg.svg" alt="My SVG Icon" style="width: 25px;">
                                    Выйти
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>




        <div class="container justify-content-sm-center py-4">
            <div class="starter-template">
                @if(session()->has('success'))
                    <p class="alert alert-success">{{ session()->get('success') }}</p>
                @endif
                @if(session()->has('warning'))
                    <p class="alert alert-warning">{{ session()->get('warning') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
