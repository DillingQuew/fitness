@extends('layouts.master')

@section('title', 'Главная')

@section('content')
    <script src="../chief-slider.js"></script>
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

    <div class="py-4 row">
     <span>
         <h2>О нас</h2>
     </span>

        <div class="container glass m-1">
            <div class="p-5">
                <div class="slider" data-slider="chiefslider">
                    <div class="slider__container">
                        <div class="slider__wrapper">
                            <div class="slider__items">
                                @foreach($products as $product)
                                    @include('layouts.card-slider', compact('product'))
                                @endforeach
                            </div>
                        </div>
                    </div>
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
        <div class="glass">
            <div>
                <img src="public/images/logo.png" alt="" style="width: 150px">
            </div>
            <div>

            </div>
        </div>
    </div>
{{--    <form method="GET" action="{{route("index")}}">--}}

{{--        <div class="card glass p-3 d-inline-block w-100 mb-2">--}}
{{--            <h2 class="filter_title">Категории</h2>--}}
{{--            --}}{{--            <button class="btn btn-success m-2" id="Digital" style="background-color:dodgerblue; border-color:dodgerblue;">Приставки</button>--}}
{{--            @foreach($categories as $category)--}}
{{--                <span class="w-25">--}}
{{--                    <a class="button-custom m-2" id="" style="background-color:dodgerblue; border-color:dodgerblue;" href="{{ route('category', $category->code) }}">--}}
{{--                        {{ $category->name }}--}}
{{--                    </a>--}}
{{--                </span>--}}
{{--            @endforeach--}}
{{--        </div>--}}



{{--        <div class="card glass p-3 d-inline-block w-100 mb-2" style="">--}}
{{--            <h2 class="filter_title" >Фильтры</h2>--}}
{{--            <span class="">--}}
{{--                <label for="price_from">Цена от--}}
{{--                    <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from}}">--}}
{{--                </label>--}}
{{--                <label for="price_to">до--}}
{{--                    <input type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">--}}
{{--                </label>--}}
{{--            </span>--}}

{{--            <span class="">--}}
{{--                <label for="hit">--}}
{{--                    <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif> Хит--}}
{{--                </label>--}}
{{--            </span>--}}

{{--            <span class="">--}}
{{--                <label for="new">--}}
{{--                    <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif> Новинка--}}
{{--                </label>--}}
{{--            </span>--}}

{{--            <span class="">--}}
{{--                <label for="recommend">--}}
{{--                    <input type="checkbox" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif> Рекомендуем--}}
{{--                </label>--}}
{{--            </span>--}}

{{--            <span class="">--}}
{{--                <button type="submit" class="btn btn-primary">Фильтр</button>--}}
{{--                <a href="{{ route("index") }}" class="btn btn-warning">Сброс</a>--}}
{{--            </span>--}}


{{--        </div>--}}
{{--    </form>--}}
{{--    <div class="py-4 row">--}}
{{--        @foreach($products as $product)--}}
{{--            @include('layouts.card', compact('product'))--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    {{ $products->links() }}--}}

@endsection
