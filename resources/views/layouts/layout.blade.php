<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/resources/css/styles.css" rel="stylesheet" />
    <link href="/resources/css/max-width1024px.css" rel="stylesheet" />
    <link href="/resources/css/max-width768px.css" rel="stylesheet" />
    <link href="/resources/css/max-width576px.css" rel="stylesheet" />

    <link rel="icon" href="/public/favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>
    <style>@yield('css')</style>
    <script>
        function openModal() {
            document.getElementById('modalContainer').style.display = 'flex'
        }

        function hideModal() {
            document.getElementById('modalContainer').style.display = 'none'
        }
    </script>
</head>
<body>

<header>
<div id="modalContainer">
    <div class="modal-overlay" onclick="hideModal()"></div>
    <div class="modal-form">
        <div class="main">
            <div class="callBlock">
                <form action="{{route('addNum')}}" method="get">
                    <div>
                                <style>
                                input{
                                    width: 80%; 
                                    line-height: 30px; 
                                    border-radius: 3px; 
                                    margin-bottom: 20px;
                                    border: 2px solid black;
                                    }
                                button{
                                    font-size: 20px; 
                                    color: white; 
                                    background-color: black; 
                                    border: 1px solid black;
                                    padding: 5px 10px; 
                                    border-radius: 5px;
                                    }
                                form{
                                    width: 90%; 
                                    max-width: 500px; 
                                    padding: 20px; 
                                    border: 3px solid black; 
                                    border-radius: 10px; 
                                    text-align: center; 
                                    }
                                .callBlock{
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    }
                                </style>
                        <div>
                            <input type="tel" placeholder="Номер телефона.." name="phone_number">
                        </div>
                        <div>
                            <input type="text" placeholder="Имя и фамилия..." name="namee">
                        </div>
                    </div>
                    <button> Перезвоните мне </button>
                </form>
            </div>
        </div>
    </div>
</div>
    <div class="headerContacts">
        <div class="headerContacts-left">
            <div class="blackButton">
            <a href = "{{ route('contacts') }}">
               Карта
             </a>
            </div>
            <p class="mt-1 fs-24">г. Киев, ул. Антоновича 24а</p>
        </div>
        <div class="headerContacts-right">
            <div class="blackButton" onclick="openModal()">
                Перезвоните мне
            </div>
            <p class="mt-1 fs-24">+380 960 43 30 16</p>
        </div>
    </div>
    <div class="menu">
        <div class="menuWrap">
            <a class="menuItem" href = "{{ route('forChildren') }}">
                Для детей
            </a>
            <a href = "{{ route('forTeens') }}" class="menuItem">
                Для подростков
            </a>
            <a  href = "{{ route('forAdults') }}" class="menuItem">
                Для взрослых
            </a>
        </div>
        <div class="menuItem text-center">
        <a href = "{{ route('main') }}">  <img class = "logo" src="/resources/src/logo.png" /> </a>
            <p class="logoTitle"><b>C I R C L E</b></p>
        </div>
        <div class="menuWrap">
           <p></p>
            <a href = "{{ route('sertificat') }}" class="menuItem">
                Сертификат
            </a>
            <a href = "{{ route('contacts') }}" class="menuItem">
                Контакты
            </a>
            <p></p>
        </div>
    </div>
    <div class="headerMobile">
        <div class="menuItem text-center">
        <a href = "{{ route('main') }}"> <img class = "logo" src="./resources/src/logo.png"> </a>
            <p class="logoTitle"><b>C I R C L E</b></p>
        </div>
        <img class="burgerImage" src="./resources/src/burger.png" />
        <div class="burgerOpen">
            <a class="menuItem" href = "{{ route('forChildren') }}">
                Для детей
            </a>
            <a href = "{{ route('forTeens') }}" class="menuItem">
                Для подростков
            </a>
            <a  href = "{{ route('forAdults') }}" class="menuItem">
                Для взрослых
            </a>
            <a href = "{{ route('sertificat') }}" class="menuItem">
                Сертификат
            </a>
            <a href = "{{ route('contacts') }}" class="menuItem">
                Контакты
            </a>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="text-center">
    <a href = "{{ route('main') }}">  <img class = "logo" src="/resources/src/logo.png" /> </a>
        <p class="logoTitleFooter"><b>C I R C L E</b></p>
    </div>
    <div class="contactLinks">
        <div class="links">
            <a href = "{{ route('forChildren') }}" class="footerItem">Для детей</a>
            <a href = "{{ route('forTeens') }}" class="footerItem">Для подростков</a>
            <a href = "{{ route('forAdults') }}" class="footerItem">Для взрослых</a>
            <a href = "{{ route('sertificat') }}" class="footerItem">Сертификат</a>
            <a href = "{{ route('contacts') }}" class="footerItem">Контакты</a>
        </div>
        <div class="contacts">
            <p class="footerItem"> Контакты: </p>
            <p class="footerItem">+380 960 43 30 16</p>
            <p class="footerItem">+380 995 94 34 23</p>
            <p class="footerItem">+380 634 76 34 87</p>
            <p class="footerItem position-relative">Instagram <img src="/resources/src/insta.png" class="instaImage" /> </p>
        </div>
    </div>
</footer>

</body>
</html>
