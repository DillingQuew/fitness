@extends('layouts.master')
@section('title', 'Главная')
@section('content')
{{--    <div class="container mt-4">--}}
{{--        @if(session('status'))--}}
{{--            <div class="alert alert-success">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <div class="card glass">--}}
{{--            <div class="card-header text-center font-weight-bold ">--}}
{{--                Заполните форму, чтобы наш менеджер связался с вами--}}

{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <form name="order" id="order" method="post" action="{{url('store-form')}}">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Имя</label>--}}
{{--                        <input type="text" id="name" name="name" class="form-control" required="">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Номер телефона</label>--}}
{{--                        <input id="phone"type="text" id="phone" name="phone" class="form-control" required="">--}}
{{--                        <script>--}}
{{--                            //Код jQuery, установливающий маску для ввода телефона элементу input--}}
{{--                            //1. После загрузки страницы,  когда все элементы будут доступны выполнить...--}}
{{--                            $(function(){--}}
{{--                                //2. Получить элемент, к которому необходимо добавить маску--}}
{{--                                $("#phone").mask("8(999) 999-9999");--}}
{{--                            });--}}
{{--                        </script>--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-primary">Отправить</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card glass">
                    <div class="card-header text-center font-weight-bold">Заполните форму, чтобы наш менеджер связался с вами</div>

                    <div class="card-body">
                        <form name="order" id="order" method="post" action="{{url('store-form')}}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" name="name" class="form-control" required="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="col-sm-4 col-form-label text-md-right">Номер телефона</label>

                                <div class="col-md-6">

                                    <input id="phone"type="text" id="phone" name="phone" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-danger">Отправить</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
