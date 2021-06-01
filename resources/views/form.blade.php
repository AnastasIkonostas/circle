@extends('layouts.layout')
@section('title', 'Сертификат')
@section('css')
    .info{
    display: flex;
    align-items: center;
    justify-content: center;
    border: 0;
    }

    form {
    width: 90%;
    max-width: 500px;
    padding: 20px;
    border: 3px solid black;
    border-radius: 10px;
    text-align: center;
    }

    button {
    font-size: 20px;
    color: white;
    background-color: black;
    border: 1px solid black;
    padding: 5px 10px;
    border-radius: 5px;
    }

    input{
    width: 80%;
    line-height: 30px;
    border-radius: 3px;
    margin-bottom: 20px;
    border: 2px solid black;
    }
@endsection
@section('content')
    <div class="main">
        <div class="info">
            <form action="{{route('add')}}" method="get">
                <div>
                    <input type="hidden"  name="idd" value="{{$_GET['id']}}">
                    <div>
                        <input type="mail" placeholder="Електронная почта..." name="emaill">
                    </div>
                    <div>
                        <input type="text" placeholder="Имя и фамилия..." name="namee">
                    </div>
                </div>
                <button>Заказать</button>
            </form>
        </div>
    </div>
@endsection
