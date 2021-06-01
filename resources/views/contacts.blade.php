@extends('layouts.layout')
@section('title', 'Контакты')
@section('content')
<div class="main">
    <div class="mapInfo">
        <div class = "textAllMap">
            <div class = "mapText">
                <b>Телефон для бронирования:</b><br><br>
                +380 960 43 30 16<br>
                +380 995 94 34 23<br>
                +380 634 76 34 87<br><br>
                <b>Адрес квест-комнат:</b><br><br>
                г. Киев, ул. Антоновича 24а<br><br>
            </div>
            <div class = "mapText">
                <b>Время работы:</b><br><br>
                с 10:00 до 22:00<br><br>
                <b>Электронная почта:</b><br><br>
                circlequest.com.ua
            </div>
        </div>
        <img class = "map" src = "/resources/src/map.png">
    </div>
</div>
@endsection
