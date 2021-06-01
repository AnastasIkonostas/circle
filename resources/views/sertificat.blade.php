@extends('layouts.layout')
@section('title', 'Сертификат')
@section('content')
<div class="main">
    <div class="info">
        <h3>СЕРТИФИКАТ</h3>
        <p>Вы можете подарить впечатления от наших квестов своим близким, друзьям и коллегам! Для этого достаточно приобрести нашу фирменный подарочный сертификат, действующий в определенных квест-комнатах Locky. Для того, чтобы воспользоваться картой, просто приносите ее с собой на игру.</p>
        <p>Подарочный сертификат на «яркий квест», можно приобрести у нас на локации, либо воспользоваться доставкой в пределах Киева. Срок действия сертификата на квесты - не ограничен.</p>
        <p>Стоимость сертификата для  комнат "Дикий запад", "Безумное чаепитие" 800 грн.</p>
        <p>Стоимость сертификата на любую комнату, включая Джуманджи 1500 грн.</p>
        <p>Сертификат на квест комнату – это отличный подарок на любой праздник.</p>
    </div>
    <img class = "sertificat" src="/resources/src/sertificat.png">
    <div class = "price">
        <div class = "priceButton">
            <a href="{{route('form')}}?id=1">Сертификат на 800 грн</a>
        </div>
        <div class = "priceButton">
            <a href="{{route('form')}}?id=2">Сертификат на 1500 грн</a>
        </div>
    </div>
</div>
@endsection
