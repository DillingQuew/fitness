@extends('layouts.master')

@section('title', 'Каталог')

@section('content')
    <h2>Изделия ручной работы на любой вкус и цвет!</h2>
                <div class="srchs-nd-fltrs">
                    <div class="search-block">
                        <div class="search-fld">
                            <input type="search" placeholder="Поиск по категории...">
                            <button><img src="../img/catalog/search.svg" alt=""><p>Поиск</p></button>
                        </div>
                        <div class="sort_by">
                            <img src="../img/catalog/Group.svg" alt="">
                            <p>Cортировать по:
                            <a href="/popular">популярности</a> / <a href="/new">новизне</a>
                            </p>
                        </div>
                    </div>
                    <div class="filters-block">
                    <div class="groups">
                        <a href="{{route('catalog')}}"> <button> Все товары <p class="gr-gds">{{$products->count()}}</p></button></a>
                        @foreach($categories as $category)
                        @include('category', compact('product'))
                    @endforeach
                    </div>
                    <div class="add-filters">
                        <p>Фильтры:</p>
                        <div class="filters">
{{--                        @include('filter')--}}
                            <form method="GET" action="{{route("catalog")}}">
                                <div class="filters row">
                                    <div class="col-sm-6 col-md-3">
                                        <label for="price_from">Цена от
                                            <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from}}">
                                        </label>
                                        <label for="price_to">до
                                            <input type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">
                                        </label>
                                    </div>
                                    <div class="col-sm-2 col-md-2">
                                        <label for="hit">
                                            <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif> Хит
                                        </label>
                                    </div>
                                    <div class="col-sm-2 col-md-2">
                                        <label for="new">
                                            <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif> Новинка
                                        </label>
                                    </div>
                                    <div class="col-sm-2 col-md-2">
                                        <label for="recommend">
                                            <input type="checkbox" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif> Рекомендуем
                                        </label>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <button type="submit" class="btn btn-primary">Фильтр</button>
                                        <a href="{{ route("catalog") }}" class="btn btn-warning">Сброс</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                <div class="goods">
                @foreach($products as $product)
                    @include('layouts.card', compact('product'))
                @endforeach
                </div>

                {{$products->links()}}

                <div class="paginator">
                    <button class="paginator__btn--left paginator__btn"><img src="../img/catalog/arrow-left.svg" alt=""></button>
                    <div class="pages">
                    <a href=""><div class="pages__page"></div></a>
                    <a href=""><div class="pages__page"></div></a>
                    <a href=""><div class="pages__page"></div></a>
                    </div>
                    <button class="paginator__btn--right paginator__btn"><img src="../img/catalog/arrow-left.svg" alt=""></button>
                </div>
@endsection

