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

    <div class="container">
        <div class=" glass p-2 m-3">
            <h1 class="filter_title">О нас</h1>
{{--            <img class="" src="public/images/logo_width.jpg" alt="logo" style="width: 300px; ">--}}
            <div class="p-3" style="text-align: center">
{{--                Покупатель имеет возможность в живую пообщаться с мастером, узнать его как человека, личность и--}}
{{--                подробно расспросить о самом изделии, его характерных особенностях и «волшебных» свойствах.--}}
{{--                <br>--}}
{{--                Кропотливо прорабатываются все детали – цвет, форма, объем, сочетания и сопутствующие материалы--}}
{{--                (фурнитура, камни, стразы, блестки и другие). Не случайно Коко Шанель предпочитала именно ручной труд.--}}
{{--                <br>--}}
{{--                Время, затрачиваемое мастером на свой труд – бесценно.--}}
{{--                Огромный, многолетний опыт, поиск и проверка используемого материала,--}}
{{--                изучение несметного количества информации, повышение квалификации на тренингах и--}}
{{--                мастер-классах, разработка авторского стиля и бренда и, конечно же, моменты Творческого Вдохновения--}}
{{--                – они не приходят на заказ и в одно мгновение!--}}
{{--                <br>--}}
{{--                <p class="text-center">Предлагаем вам оценить послдение работы мастера</p>--}}
                <div class="benefit-list">
                    <div class="row row-eq-height">

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 card card-body m-1" style="background: black;">
                            <div class="benefit-item" id="bx_651765591_100">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-icon"><span class="fa fa-thumbs-up">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-content">
                                            <div class="benefit-item-name">
                                                <h3 class="benefit-item-link">Доступный фитнес в удовольствие.</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="benefit-item-description">
                                    У нас тренируются те, кто решил работать над своим телом и здоровьем.<br>
                                    Мы создаем условия, в которых каждый может получить результат.
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 card card-body m-1" style="background: black;">
                            <div class="benefit-item" id="bx_651765591_36">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-icon"><span class="fa fa-users"></span></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-content">
                                            <div class="benefit-item-name">
                                                <h3 class="benefit-item-link">Команда профессионалов</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="benefit-item-description">
                                    Мы знаем, как важен тренер на первых этапах. Поэтому стоимость индивидуальных тренировок у нас одни из самых низких.						</div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 card card-body m-1" style="background: black;">
                            <div class="benefit-item" id="bx_651765591_38">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-icon"><span class="fa fa-coffee"></span></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-content">
                                            <div class="benefit-item-name">
                                                <h3 class="benefit-item-link">Комфорт</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="benefit-item-description">
                                    Мотивируем к занятиям спортом уютной атмосферой и просторными светлыми залами.						</div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 card card-body m-1" style="background: black;">
                            <div class="benefit-item" id="bx_651765591_101">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-icon"><span class="fa fa-tree"></span></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-content">
                                            <div class="benefit-item-name">
                                                <h3 class="benefit-item-link">Большая кардио-зона с видом на улицу</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="benefit-item-description">
                                    Смотрите на мир в огромное панорамное окно во время кардио!						</div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 card card-body m-1" style="background: black;">
                            <div class="benefit-item" id="bx_651765591_102">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-icon"><span class="fa fa-rub"></span></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-content">
                                            <div class="benefit-item-name">
                                                <h3 class="benefit-item-link">Выгодные акции и скидки</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="benefit-item-description">
                                    Постоянно радуем своих клиентов выгодными предложениями.						</div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 card card-body m-1" style="background: black;">
                            <div class="benefit-item" id="bx_651765591_103">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-icon"><span class="fa fa-building"></span></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="benefit-item-content">
                                            <div class="benefit-item-name">
                                                <h3 class="benefit-item-link">Многофункциональный комплекс</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="benefit-item-description">
                                    Все необходимое в одном месте: тренажерный зал с кардио-зоной, групповые программы, единоборства и самооборона, кроссфит, танцевальные студии для детей.						</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="glass p-3 m-1">
            <h2 style="text-align: center">Места для тренеровки</h2>
            <div class="slider__container ">
                <div class="slider container" data-slider="chiefslider">
                    <div class="slider__container">
                        <div class="slider__wrapper m-3 p-2">
                            <div class="slider__items">
                                <div class="slider__item text-center">
                                    <div class="m-1">
                                        <div class="position-relative p-2" style="box-shadow: none;">
                                            <img class="card-img" src="/public/images/fitnessrooms/1.jpg" alt="Тут должна быть картинка" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="slider__item text-center">
                                    <div class="m-1">
                                        <div class="position-relative p-2" style="box-shadow: none;">
                                            <img class="card-img" src="/public/images/fitnessrooms/2.jpg" alt="Тут должна быть картинка" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="slider__item text-center">
                                    <div class="m-1">
                                        <div class="position-relative  p-2" style="box-shadow: none;">
                                            <img class="card-img" src="/public/images/fitnessrooms/3.jpg" alt="Тут должна быть картинка" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="slider__item text-center">
                                    <div class="m-1">
                                        <div class="position-relative p-2" style="box-shadow: none;">
                                            <img class="card-img" src="/public/images/fitnessrooms/4.jpg" alt="Тут должна быть картинка" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="slider__item text-center">
                                    <div class="m-1">
                                        <div class="position-relative p-2" style="box-shadow: none;">
                                            <img class="card-img" src="/public/images/fitnessrooms/5.jpg" alt="Тут должна быть картинка" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>

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

{{--    <div class="glass container-sm p-3 m-1">--}}
{{--        <h2 class="filter_title mt-3">Мы в социальных сетях!</h2>--}}

{{--        <div class="d-flex justify-content-around social-networks">--}}
{{--            <h3>Свяжитесь с нами через </h3>--}}
{{--            <ul class="navbar-nav d-inline socials">--}}
{{--                <li class="nav-item d-inline social">--}}
{{--                    <a href="https://vk.com/bazdareva_e" class="btn-link" style="text-decoration: none;">--}}
{{--                        <img class="m-1" src="/images/svg/vk.svg" alt="My SVG Icon" style="width: 50px; padding:0;">--}}
{{--                        ВКонтакте--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item d-inline social">--}}
{{--                        <img class="m-1" src="/images/svg/whatsapp.svg" alt="My SVG Icon" style="width: 50px; padding:0;">--}}
{{--                        +7 908 804-96-78--}}
{{--                </li>--}}
{{--                <li class="nav-item d-inline">--}}
{{--                    <a href="https://www.instagram.com@skazka_nikitina/" class="btn-link" style="text-decoration: none;">--}}
{{--                        <img src="/images/svg/instagram.svg" alt="My SVG Icon" style="width: 50px; padding:0;">--}}
{{--                        Instagram--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
