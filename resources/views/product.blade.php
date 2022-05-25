@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <div class="glass container-sm p-3 m-1">
            <div class="card-body" >
                <div class="card w-50" style="margin-left: auto; margin-right: auto;">
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
                    <img class="card-img  h-auto" src="{{Storage::url($product->image)}}" alt="Тут должна быть картинка" style="width: 100%;">

                    <div class="card-body d-inline-block " style="color:black; background-color: var(--bgc-for-card); border-radius:5px; width:100%; padding:0;">
                        <span class="card-text text-center d-block pb-2">
                            <h3>{{ $product->name }}</h3>
                            <h3>Описание</h3> {{$product->description}}
                            <p class="card-text text-center m-0">{{ $product->price }} руб.</p>
                        </span>
                        <p>
                        <form style="" class="p-2" action="{{ route('basket-add', $product) }}" method="POST">
                            <button type="submit" class="btn btn-success" role="button">В корзину</button>

                            @csrf
                        </form>
                        </p>
                    </div>
                </div>
            </div>

@endsection
