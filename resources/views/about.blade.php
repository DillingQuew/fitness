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
        <div class="container glass m-1">
            <h1 class="filter_title mt-3">О нас</h1>
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
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="glass container-sm p-3 m-1">
            <div class="row-cols-2 justify-content-center">
                <img src="public/images/logo_width.jpg" class="mw-100 card-img adaptive-img top-0" alt="" style="width: 300px">

                    <span class="d-inline-block float-child p-2 adaptive-span card-text about-us-text">
                        Мы те, кто дарит людям счастье своими руками... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis minus nostrum unde.
                        A blanditiis culpa eligendi in ipsam laudantium perspiciatis quaerat quibusdam! Assumenda et nam officiis
                        perferendis perspiciatis placeat veritatis!
                    </span>
            </div>
        </div>
    </div>
    <div class="glass container-sm p-3 m-1">
        <h2 class="filter_title mt-3">Мы в социальных сетях!</h2>

        <div class="d-flex justify-content-around social-networks">
            <h3>Можете связаться с нами через </h3>
            <ul class="navbar-nav d-inline float-left">
                <li class="nav-item d-inline">
                    <a href="https://vk.com/bazdareva_e" class="btn-link" style="text-decoration: none;">
                        <img src="/images/svg/vk.svg" alt="My SVG Icon" style="width: 50px; padding:0;">
                        ВКонтакте
                    </a>
                </li>
                <li class="nav-item d-inline">
                    <a href="https://vk.com/bazdareva_e" class="btn-link" style="text-decoration: none;">
                        <img src="/images/svg/telega.svg" alt="My SVG Icon" style="width: 50px; padding:0;">
                        Telegram
                    </a>
                </li>
                <li class="nav-item d-inline">
                    <a href="https://www.instagram.com@skazka_nikitina/" class="btn-link" style="text-decoration: none;">
                        <img src="/images/svg/telega2.svg" alt="My SVG Icon" style="width: 50px; padding:0;">
                        Instagram
                    </a>
                </li>
            </ul>
        </div>
    </div>

@endsection
