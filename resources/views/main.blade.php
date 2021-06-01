@extends('layouts.layout')
@section('title', 'Главная')
@section('content')
<div class="wrapper">
    <div class="main">
        <div class="quests">
            <div class="questItem">
                <img src="/resources/src/quest1.png" class="questImage">
                <h3 class="questTitle">QUEST ROOM  "ДИКИЙ ЗАПАД"</h3>
                <div class="questText">
                    <div class="questInfo">
                        <p class="questType">Жанр: исторический</p>
                        <p>2-4 участников</p>
                        <p>60 минут</p>
                        <p>Сложность: легкая</p>
                        <p>Цена: от 600грн с команды</p>
                    </div>
                    <a href = "{{ route('west') }}" class="questMore">
                        Подробнее
                    </a>
                </div>
            </div>
            <div class="questItem">
                <img src="/resources/src/quest2.png" class="questImage">
                <h3 class="questTitle">QUEST ROOM  "ДЖУМАНДЖИ"</h3>
                <div class="questText">
                    <div class="questInfo">
                        <p class="questType">Жанр: исторический</p>
                        <p>2-4 участников</p>
                        <p>60 минут</p>
                        <p>Сложность: легкая</p>
                        <p>Цена: от 600грн с команды</p>
                    </div>
                    <a href = "{{ route('jumanji') }}"  class="questMore">
                        Подробнее
                    </a>
                </div>
            </div>
            <div class="questItem">
                <img src="/resources/src/quest3.png" class="questImage">
                <h3 class="questTitle">QUEST ROOM  "ГАРРИ ПОТТЕР"</h3>
                <div class="questText">
                    <div class="questInfo">
                        <p class="questType">Жанр: исторический</p>
                        <p>2-4 участников</p>
                        <p>60 минут</p>
                        <p>Сложность: легкая</p>
                        <p>Цена: от 600грн с команды</p>
                    </div>
                    <a href = "{{ route('potter') }}"  class="questMore">
                        Подробнее
                    </a>
                </div>
            </div>
            <div class="questItem">
                <img src="/resources/src/quest4.png" class="questImage">
                <h3 class="questTitle">QUEST ROOM  "АВАТАР"</h3>
                <div class="questText">
                    <div class="questInfo">
                        <p class="questType">Жанр: исторический</p>
                        <p>2-4 участников</p>
                        <p>60 минут</p>
                        <p>Сложность: легкая</p>
                        <p>Цена: от 600грн с команды</p>
                    </div>
                    <a href = "{{ route('avatar') }}"  class="questMore">
                        Подробнее
                    </a>
                </div>
            </div>
            <div class="questItem">
                <img src="/resources/src/quest5.png" class="questImage">
                <h3 class="questTitle">QUEST ROOM  "PARTY ROOM"</h3>
                <div class="questText">
                    <div class="questInfo">
                        <p class="questType">Жанр: исторический</p>
                        <p>2-4 участников</p>
                        <p>60 минут</p>
                        <p>Сложность: легкая</p>
                        <p>Цена: от 600грн с команды</p>
                    </div>
                    <a href = "{{ route('party') }}"  class="questMore">
                        Подробнее
                    </a>
                </div>
            </div>
            <div class="questItem">
                <img src="/resources/src/quest6.png" class="questImage">
                <h3 class="questTitle">"АЛИСА В СТРАНЕ ЧУДЕС"</h3>
                <div class="questText">
                    <div class="questInfo">
                        <p class="questType">Жанр: исторический</p>
                        <p>2-4 участников</p>
                        <p>60 минут</p>
                        <p>Сложность: легкая</p>
                        <p>Цена: от 600грн с команды</p>
                    </div>
                    <a href = "{{ route('alice') }}"  class="questMore">
                        Подробнее
                    </a>
                </div>
            </div>
        </div>
        <div class="info">
            <h3>КВЕСТ КОМНАТЫ В ГОРОДЕ КИЕВ</h3>
            <p>Если Вы решили увлекательно отдохнуть и ищете лучшие квест-комнаты в Киеве - то обратились по адресу!  Мы рады приветствовать Вас на сайте организатора лучших квестов в столице Украины.</p>
            <p>Квест комната - это хорошо известная игра в побег, где нужно найти выход. Команда игроков совместно ищет подсказки, решает головоломки и выполняет задачи в одном или нескольких квестах. Конечной целью игры является побег, так называемый выход из комнаты.</p>
            <p>Квесты получили широкую популярность в Северной Америке, Европе и Восточной Азии еще в 2010-х годах. Мы усердно работали над созданием новых, уникальных и захватывающих впечатлений. Считаем, что Нам удалость создать одни из лучших квест-комнат в Киеве.</p>
            <p>Испытайте свой ум и проведите увлекательно время в Наших замысловатых Quest-room. Они были созданы для захватывающих приключений и побега в качестве награды за Ваши способности и волю к победе.</p>

            <h3>ПОЧЕМУ КВЕСТ-КОМНАТЫ CIRCLE ЯВЛЯЕТСЯ ЛУЧШИМИ В КИЕВЕ</h3>
            <p>1. У Нас индивидуальный подход к каждому из наших гостей. Мы всегда уделяем каждому посетителю максимально внимания, так как очень любим и дорожим нашими гостями</p>
            <p>2. Проработка наших квестов это отдельный этап, которому мы отводим самую главную роль. Мы делаем крутыми не только сами задания но и декорации в наших квестах. И переносим из реальности в тематику того квеста, который выбрали наши гости.</p>
            <p>3. Локи - это единственная квест-локация в городе Киев, где возможно пройти пять квестов параллельно и отдохнуть в красивой “Party room”.  Очень удобно для больших компаний до 30 участников вне зависимости от того взрослые это или же дети.</p>
            <p>4. Отсутствие хоррор квестов даёт возможность посещать их всей семьей в независимости от возраста.</p>
            <p>5. Бюджетное празднование дня рождения или корпоратива в сравнении с рестораном /боулингом / караоке и т.д</p>
            <p>6. Постоянный контроль за исправностью заданий и реквизита, квесты всегда, как новые</p>
            <p>7. Расположение на Печерске, в 10 минутах от метро.</p>
            <p>8. Наличие пригласительных на день рождения и уникальных сертификатов, которые станут памятным сувениром.</p>
            <p>9. Персонал говорящий свободно на английском.</p>
            <p>Квест комнаты Локи - это яркое и реалистичное оформление, которое перенесет вас в тематику игры!</p>

            <h3>КВЕСТ КОМНАТЫ ДЛЯ ДЕТЕЙ В КИЕВЕ</h3>
            <p>Квест-комнаты для детей в Киеве найти просто вместе с Локи! Мы обожаем детей и их довольные лица после выхода из quest room. Именно поэтому сделали Все наши комнаты такими, чтобы в них было интересно проводить время посетителям люього возраста. В quest room CIRCLE не будет страшно. Наши квесты - это смесь восторга и адреналина, которые останутся с Вами еще надолго.</p>
            <p>Мы попытались достичь вау-эффекта не только реалистичным антуражем quest room, но и увлекательными головоломками. Они не требуют знаний Высшей математики, однако перевернут с ног на голову Ваш образ мышления.</p>
            <p>У нас в CIRCLE Мы рады видеть деток абсолютно разного возраста. Найти выход из комнат можно попробовать всей семьей, даже если ребенку два или три года, а вот самостоятельно проходить quest могут детские команды у которых есть участник старше 14 лет. Если же все участники младшего школьного возраста, то несомненно нужен сопровождающий взрослый.</p>
            <p>Чтобы найты выход из комнаты CIRCLE , деткам нужно будет ознакомиться с описанием каждойкомнаты и рекомендациями, что выбрать понравившийся квест и забронировать его.</p>
            <p>Что делать если Вы не определились? Конечно же звоните нам!</p>
            <p>Наши сотрудники помогут Вам с выбором, ответят на любые вопросы и впоследствии сделают Ваше пребывание у нас максимально комфортным и увлекательным!</p>
        </div>
        <div class="gallery">
            <img src="/resources/src/gallery1.png" />
            <img src="/resources/src/gallery2.png" />
        </div>
        <div class="info">
            <h3>QUEST ROOM "ДЖУМАНДЖИ"</h3>
            <p>Квест комната для детей Джуманджи перенесет Вас назад в 90-е, где простая настольная игра стала началом захватывающих приключений. Ведь каждый из нас в детстве мечтал стать героем любимого фильма, и мы предоставим Вам такую возможность.</p>
            <p>Среди наших квест-румов - это самый запутанный и увлекательный квест. Дети получат максимум впечатлений от посещения квеста Джуманджи, однако учитывая сложность мы все таки рекомендуем данную комнату проходить либо в сопровождении взрослых, либо же командой детей старше 14 лет.</p>

            <h3>QUEST ROOM "АЛИСА В СТРАНЕ ЧУДЕС"</h3>
            <p>Алиса в стране чудес стала одной из любимых квест-комната для детей младшего школьного возраста и подростков. В данной комнате Вы сможете почувствовать себя участником того самого знаменитого Чаепития в Стране Чудес Алисы.</p>
            <p>Кто знает какие загадки приберег для Вас мартовский Заяц и где спрятал подсказки Безумный шляпник…..</p>

            <p>Вперед на поиски! Но запомните, Красная королева подготовилась к появлению в Стране Чудес чужих, и чтобы не разозлить ее, Вам нужно выбраться оттуда за час.</p>

            <h3>КВЕСТ КОМНАТА ДЛЯ ДЕТЕЙ ДИКИЙ ЗАПАД</h3>
            <p>Квест комната для детей Дикий Запад это квест для настоящих ковбоев. Как и остальные наши комнаты она полностью отвечает своей тематике и создает иллюзию путешествия во времени. </p>
            <p>Квест комната Дикий Запад очень скоро уступит место квестам в виртуальной реальности, так что не теряйте времени. Успейте посетить ее до закрытия!</p>

            <h3>QUEST ROOM "АВАТАР"</h3>
            <p>Квест комната для детей Аватар это история про спасение чужой планеты. Войдя в нее, вы отправитесь в незабываемое путешествие на космическом корабле. Вам встретятся самые необыкновенные неземные создания. И, пройдя квест, Вы станете настоящими героями Аватара….</p>
            <p>Квест комната Аватар излюбленная комната как на взрослых корпоративах так и на детских днях рождения. Еще никто не покинул комнату разочарованным. Вам обязательно здесь понравится!</p>

            <h3>КВЕСТ КОМНАТА ДЛЯ ДЕТЕЙ ГАРРИ ПОТТЕР</h3>
            <p>Гарри Поттер это одна из самых популярных квест комнат для детей, ведь сегодня сложно найти ребенка, который ни разу не мечтал бы пройти через платформу 9 и ¾. У нас в CIRCLE все возможно. Мир магии приоткроет свою дверь маленьким маглам.</p>
            <p>Здесь всех участников квеста ждут “великие дела” и незабываемые приключения. Возможно Вам даже удастся пробраться в кабинет Дамблдора и упросить Распределяющую шляпу назначить Вам факультет… </p>
            <p>А что? Вы помните разговор Дамблдора и Гарри Поттера:</p>
            <p>— Профессор, это правда или это у меня в голове?</p>
            <p>— Конечно, у тебя в голове, Гарри. ВоÏт только почему это не может быть правдой?</p>
            <p>Вот и в нашей квест-комнате есть магия, и не важно правда ли это, если все вокруг зависит сейчас только от Вас и вашей фантазии.</p>
        </div>
    </div>

</div>
@endsection

