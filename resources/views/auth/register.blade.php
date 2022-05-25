@extends('layouts.master')

@section('title', 'Регистрация')

@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8">
            <div class="card glass">
                <div class="card-header">Регистрация</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="Register">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name"
                                   value="" required autofocus>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control"
                                   name="email" value="" required>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control"
                                   name="password" required>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Подтвердите
                            пароль</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                   required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Зарегистрироваться
                            </button>
                        </div>
                    </div>
                </form>
                    </div>
            </div>
        </div>
@endsection
