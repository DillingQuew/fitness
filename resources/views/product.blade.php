@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <div class="glass container-sm p-3 m-1">
        <div class="row-cols-2">
            <div class="">
                <img src="{{Storage::url($product->image)}}" class="mw-100 card-img" alt="" style="width: 300px">
            </div>

            <div class="">
                 <span class="about-us-text">
                <h1>{{ $product->name }}</h1>
                    <p>Цена:
                        <b>{{ $product->price }}</b>
                    </p>
                <p>{{$product->description}}</p>
                    <form action="{{ route('basket-add', $product) }}" method="POST">
                        <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                        @csrf
                    </form>
                </span>
            </div>

        </div>
    </div>
@endsection
