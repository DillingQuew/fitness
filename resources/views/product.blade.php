@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <div class="glass container p-3 m-1">
            <div class="card-body w-75" >
                <div class="" style="margin-left: auto; margin-right: auto;">
                    <div class="labels badge_menu">
                        @if($product->isNew())
                            <span class="badge rounded-pill bg-warning text-dark">Новинка</span>
                        @endif

                        @if($product->isRecommend())
                            <span class="badge rounded-pill bg-primary">Рекомендуем</span>
                        @endif

                        @if($product->isHit())
                            <span class="badge rounded-pill bg-success">Хит продаж!</span>
                        @endif
                    </div>
                    <img class="card-img  h-auto w-50 h-auto" src="{{Storage::url($product->image)}}" alt="Тут должна быть картинка" style="width: 100%;">

                    <div class="card-body d-inline-block p-3 w-50 float-end card-img" style="color:black;
                    background-color: var(--bgc-for-card);
                    border-radius:5px;
                    width:100%;
                    height: 424px;
                    padding:0;">

                        <span class="card-text text-center d-block ">
                            <h3>{{ $product->name }}</h3>
                            <p>{{$product->description}}</p>
                            <p class="card-text text-center m-0">{{ $product->price }} руб.</p>
                        </span>
                            @guest
                                <p class="text-center">Войдите, чтобы добавить товар в корзину</p>
                            @endguest
                            @auth
                            <form style="" class="p-2" action="{{ route('basket-add', $product) }}" method="POST">
                            <button type="submit" class="btn btn-success justify-content-center" role="button">В корзину</button>
                            </form>
                            @endauth
                            @csrf
                    </div>
                </div>
            </div>

@endsection
