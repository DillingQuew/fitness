@extends('layouts.master')
@section('title', 'Главная')
@section('content')
    <form method="GET" action="{{route("index")}}">
        <div class="card glass p-3 d-inline-block w-100 mb-2 overflow-auto">
            <h2 class="filter_title">Категории</h2>
            @foreach($categories as $category)
                <span class="w-25">
                    <a class="btn btn-dark m-1" id="" style="background-color:dodgerblue; border-color:dodgerblue;" href="{{ route('category', $category->code) }}">
                        {{ $category->name }}
                    </a>
                </span>
            @endforeach
        </div>

        <div class="card glass p-3 d-inline-block w-100 mb-2 shadow-drop-2-center overflow-auto">
            <h2 class="filter_title" >Фильтры</h2>


            <ul class="navbar-nav d-inline float-left filters p-0" style="list-style: none; width: 100%;">
                <span class="d-inline fw-bold">Цена</span>
                <li class="nav-item d-inline">
                     <span class="">
                        <label for="price_from">
                            <input class="input-group" type="text" placeholder="От" name="price_from" id="price_from" size="6" value="{{ request()->price_from}}">
                        </label>
                          <label class="" for="price_to">
                            <input class="input-group" type="text" placeholder="До "name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">
                        </label>
                    </span>
                </li>

                <span class="d-inline fw-bold">Группа</span>

                <li class="nav-item d-inline">
                    <span class="">
                         <label for="hit">
                            <input type="checkbox" class="custom-checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif> Хит
                        </label>
                    </span>
                </li>

                <li class="nav-item d-inline">
                    <span class="">
                        <label for="new">
                            <input type="checkbox"  class="custom-checkbox" name="new" id="new" @if(request()->has('new')) checked @endif> Новинка
                        </label>
                    </span>
                </li>

                <li class="nav-item d-inline">
                     <span class="">
                          <label for="recommend">
                                <input type="checkbox"  class="custom-checkbox" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif> Рекомендуем
                          </label>
                    </span>
                </li>

                <li class="nav-item d-inline">
                     <span class="">
                        <button type="submit" class="btn btn-success m-1">Фильтр</button>
                          <a href="{{ route("index") }}" class="btn btn-danger m-1">Сброс</a>
                    </span>
                </li>

            </ul>
        </div>
    </form>
    <div class="py-4 row pt-0">
        @if($products->isEmpty())
            <p class="glass text-center w-75 p-2 " style="margin-right: auto; margin-left: auto;">
                Кажется, ничего не найдено...
                <img src="/images/hz.png" alt="" style="width: 60px">
            </p>
        @elseif($products->isEmpty()==false)
            @foreach($products as $product)
                @include('layouts.card', compact('product'))
            @endforeach
        @endif
    </div>
        {{ $products->links() }}

@endsection
