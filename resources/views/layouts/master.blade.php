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

    <link rel="stylesheet" href="{{asset('js/chief-slider.css')}}">
    <script src="{{ asset('js/chief-slider.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="background-back" style="">
    <div id="app">
            <nav class="container navbar navbar-expand-md header-top" style=" background: transparent;">
                <div class="container glass">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <div class="logo " style="">
                            <img class="" src="/images/logo/logo_custom.svg" alt="My SVG Icon" style="width: 100px; z-index:2; padding:0;">
{{--                            <img class="position-absolute absolute-center" src="/images/logo/ruler.svg" alt="My SVG Icon" style="transform:rotate(45deg); z-index:1; padding:0;">--}}
                        </div>
                    </a>
                    <button class="navbar-toggler main-colors" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="padding:0px 5px 5px 0px;">
                    <span class="navbar-toggler-icon">
                         <img src="/images/svg/list-menu-hand-drawn-symbol-of-three-thin-rectangles-outlines-svgrepo-com.svg" alt="My SVG Icon" style="width: 35px; padding:0;">
                    </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/about" style="color: var(--main-color)">
                                    <img class="main-colors" src="/images/svg/list-paper-hand-drawn-symbol-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                    О нас
                                </a>
                            </li>
                            @auth
                            <li class="nav-item" @routeactive('basket*')>
                                <a class="nav-link" href="{{ route('basket') }}" style="color:var(--main-color);">
                                    <img class="main-colors" src="/images/svg/shopping-bag-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                    В корзину
                                </a>
                            </li>
                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color: var(--main-color);">
                                        <img class="main-colors" src="/images/svg/next-user-hand-drawn-interface-symbol-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                        Войти
                                    </a>
                                </li>
                            @endguest

                            @auth
                                @admin
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}" style="color: var(--main-color);">
                                        <img class="main-colors" src="/images/svg/admin-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                        Панель администратора
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" style="color: var(--main-color);" href="{{ route('person.orders.index') }}">
                                        <img class="main-colors" src="/images/svg/person-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                        Мои заказы
                                    </a>
                                </li>
                                @endadmin
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('get-logout') }}" style="color: var(--main-color);">
                                        <img class="main-colors" src="/images/svg/exit-svg.svg" alt="My SVG Icon" style="width: 25px;">
                                        Выйти
                                    </a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container justify-content-sm-center py-4 pt-0">
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
