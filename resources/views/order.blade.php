@extends('layouts.master')

@section('title', 'Оформить заказ')

@section('content')
    <div class="container glass p-3" >
        <div class="">

            <h1>Подтвердите заказ:</h1>
            <div class="">
                <div class="w-75" style="margin-left: auto; margin-right: auto;">
                    <p>Общая стоимость заказа: <b>{{ $order->calculateFullSum() }} руб.</b></p>
                    <form action="{{ route('basket-confirm') }}" method="POST">
                        <div>
                            <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>

                            <div class="container">
                                <div class="form-group">
                                    <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                                    <div class="col-lg-4">
                                        <input type="text" name="name" id="name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label ">
                                        Номер телефона: </label>
                                    <div class="col-lg-4">
                                        <input type="text" name="phone" id="phone" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <br>
                            @csrf
                            <input type="submit" class="btn btn-success" value="Подтвердить заказ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
