@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>Цена: <b>{{ $product->price }}</b></p>

    <img class="card-img" src="{{Storage::url($product->image)}}">
    <p>{{$product->description}}</p>
    <form action="{{ route('basket-add', $product) }}" method="POST">
        <button type="submit" class="btn btn-primary" role="button">В корзину</button>
        @csrf
    </form>
@endsection
