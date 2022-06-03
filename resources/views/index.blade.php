@extends('layouts.master')
@section('title', 'Главная')
@section('content')

    <div class="starter-block " style="margin-left: auto; margin-right: auto; position:relative" >
        <div class="container justify-content-sm-center py-4 pt-0 " >
            <div class="p-1"
                 style="margin-left: auto; position:absolute; bottom:0; left:0; right: 0;
                margin-right: auto; background: black;
                border:2px solid red;
                /*border-bottom:none;*/
                border-radius:20px 20px 0 0;">
                <h1 class="p-2" style="text-align: center;font-weight: bold;">Пробное занятие в GYM - бесплатно!</h1>
            </div>

            <h2 class="glass-back p-2" style="max-width: 300px; min-width: 100px; padding-top: 20px;">
                Всегда выбирайте
                самый трудный путь — на нём вы не встретите конкурентов.
                (Шарль де Голль)
            </h2>
        </div>

    </div>

    <div class="container justify-content-sm-center py-4 pt-3">
        <h2>Хотите стать лучше?</h2>
        <p>Но все время откладываете на завтра? С решением вашего вопроса помогут наши лучшие фитнес-тренера!</p>

             <h2 class="text-center">
                 <a  class="btn btn-danger" href="{{route('addOrder')}}">Записаться на первое бесплатное занятие
                 </a>
             </h2>


    </div>

    <div class="container justify-content-sm-center py-4 pt-0">
        <div>
            <div class="">
                <div class="">
                    <h3 class="text-center">КЛУБ GYM В ОМСКЕ</h3>
                    <p>Адрес: ул. Лермонтова, 24</p>
                    <p style="border-bottom:1px solid red;">График работы: с 10:00 до 22:00</p>
                    <div class="resizer ugly">
                        <iframe class="resized" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d809.5205995778514!2d73.37801136575803!3d54.97888568590797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1654161207227!5m2!1sru!2sru"
                                width="600" height="450"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
