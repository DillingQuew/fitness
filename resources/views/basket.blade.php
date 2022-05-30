@extends('layouts.master')

@section('title', 'Корзина')

@section('content')
    <div class="glass p-3">
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products()->with('category')->get() as $product)
                    <tr>
                        <td>
                            <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                <img height="56px" src="{{ Storage::url($product->image) }}">
                                {{ $product->name }}
                            </a>
                        </td>
                        <td>
                            <div class="btn-group form-inline">
                                <form action="{{ route('basket-remove', $product) }}" method="POST">
                                    <button type="submit" class="btn btn-danger btn-minus-count btn-number" data-type="minus" data-field="quant[1]">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true">
                                        -
                                    </span>
                                    </button>
                                    @csrf
                                </form>

                                <span class="form-control ">{{ $product->pivot->count }}</span>

                                <form action="{{ route('basket-add', $product) }}" method="POST">
                                    <button type="submit" class="btn btn-success btn-plus-count btn-number" data-type="plus" data-field="quant[1]">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true">
                                        +
                                    </span>
                                    </button>
                                    @csrf
                                </form>
                            </div>
                        </td>
                        <td>{{ $product->price }} руб.</td>
                        <td>{{ $product->getPriceForCount() }} руб.</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>{{ $order->getFullSum() }} руб.</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="{{ route('basket-place') }}">Оформить
                    заказ</a>
            </div>
        </div>
    </div>

@endsection
