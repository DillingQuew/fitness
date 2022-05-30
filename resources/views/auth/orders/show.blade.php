@extends('auth.layouts.master')

@section('title', 'Заказ ' . $order->id)

@section('content')
    <div class="py-4">
        <div class="container glass">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Заказ №{{ $order->id }}</h1>
                    <p>Заказчик: <b>{{ $order->name }}</b></p>
                    <p>Номер теелфона: <b>{{ $order->phone }}</b></p>
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
                        @foreach ($order->products as $product)
                            <tr>
                                <td>
                                    <img height="56px"
                                         src="{{ Storage::url($product->image) }}">
                                    <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}" class="btn btn-default"
                                       >
                                        {{ $product->name }}
                                    </a>


</a>
</td>
<td><span class="form-label">{{ $product->pivot->count }} шт.</span></td>
<td>{{ $product->price }} руб.</td>
<td>{{ $product->getPriceForCount()}} руб.</td>
</tr>
@endforeach
<tr>
<td colspan="3">Общая стоимость:</td>
<td>{{ $order->calculateFullSum() }} руб.</td>
</tr>
</tbody>
</table>
<br>
</div>
</div>
</div>
</div>
@endsection
