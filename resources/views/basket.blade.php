@extends('layouts.app')
<!-- Подключение основного шаблона для главной страницы -->
@section('title')
Корзина
@endsection
<!-- Объявление названия для представления, которое потом будет выводиться в браузере -->

<!-- Секция с основным изменяемым содержимым -->
@section('content')

<section class="new-container">

    <div class="">
        <img src="{{asset('image/basket/basket.svg')}}" alt="">
        <h3 class="text-white font-light">В данный момент сейчас корзина пуста</h3>
        <h3 class="text-white font-light">Хотите сделать заказ?</h3>
    </div>

</section>


















@endsection
<!-- Секция с основным изменяемым содержимым -->