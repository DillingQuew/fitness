@extends('layouts.master')

@section('title', 'Главная')

@section('content')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new ChiefSlider('.slider', {
                loop: true,
                autoplay: true,
                interval: 5000,
                refresh: true,
            });
        });
    </script>

    <div class="">
        <div class="container glass p-3 m-1">
            <h1 class="filter_title  ">О нас</h1>
{{--            <img class="" src="public/images/logo_width.jpg" alt="logo" style="width: 300px; ">--}}
            <div class="" style="">
                Покупатель имеет возможность в живую пообщаться с мастером, узнать его как человека, личность и
                подробно расспросить о самом изделии, его характерных особенностях и «волшебных» свойствах.
                <br>
                Кропотливо прорабатываются все детали – цвет, форма, объем, сочетания и сопутствующие материалы
                (фурнитура, камни, стразы, блестки и другие). Не случайно Коко Шанель предпочитала именно ручной труд.
                <br>
                Время, затрачиваемое мастером на свой труд – бесценно.
                Огромный, многолетний опыт, поиск и проверка используемого материала,
                изучение несметного количества информации, повышение квалификации на тренингах и
                мастер-классах, разработка авторского стиля и бренда и, конечно же, моменты Творческого Вдохновения
                – они не приходят на заказ и в одно мгновение!
                <br>
                <p class="text-center">Предлагаем вам оценить послдение работы мастера</p>
            </div>
        </div>

        <div class="glass p-3 m-1">
            <div class="">
                <div class="slider" data-slider="chiefslider">
                    <div class="slider__container">
                        <div class="slider__wrapper m-3 p-2">
                            <div class="slider__items">
                                @foreach($products as $product)
                                    @include('layouts.card-slider', compact('product'))
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#" class="slider__control" data-slide="prev"></a>
                        <a href="#" class="slider__control" data-slide="next"></a>
                        <ol class="slider__indicators">
                            <li data-slide-to="0"></li>
                            <li data-slide-to="1"></li>
                            <li data-slide-to="2"></li>
                            <li data-slide-to="3"></li>
                            <li data-slide-to="4"></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="glass container-sm p-3 m-1">
        <h2 class="filter_title mt-3">Мы в социальных сетях!</h2>

        <div class="d-flex justify-content-around social-networks">
            <h3>Свяжитесь с нами через </h3>
            <ul class="navbar-nav d-inline float-left">
                <li class="nav-item d-inline">
                    <a href="https://vk.com/bazdareva_e" class="btn-link" style="text-decoration: none;">
                        <img class="m-1" src="/images/svg/vk.svg" alt="My SVG Icon" style="width: 50px; padding:0;">
                        ВКонтакте
                    </a>
                </li>
                <li class="nav-item d-inline">
                        <img class="m-1" src="/images/svg/whatsapp.svg" alt="My SVG Icon" style="width: 50px; padding:0;">
                        +7 908 804-96-78
                </li>
{{--                <li class="nav-item d-inline">--}}
{{--                    <a href="https://www.instagram.com@skazka_nikitina/" class="btn-link" style="text-decoration: none;">--}}
{{--                        <img src="/images/svg/instagram.svg" alt="My SVG Icon" style="width: 50px; padding:0;">--}}
{{--                        Instagram--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>

@endsection
