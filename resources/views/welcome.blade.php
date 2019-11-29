@extends('layouts.app')
@push('styles')
    <style>
        body
        {
            overflow-x: hidden;
        }
    </style>
@endpush
@section('content')
    {{--background-image: url({{ asset('images/first_section_bg.png') }})--}}
    <div class="cont">

        <div class="container-fluid bg position-relative" style="background:transparent;">
            <canvas id="canvas"></canvas>
            <div class="row" style="padding-top:14%; padding-bottom: 10%;">
                <div class="col-lg-1 col-12 d-lg-block d-none" data-aos="fade-right">
                    <div style="transform: rotate(-90deg) translateX(-200px);">
                    <div style="font-size:16px; line-height: 140%; width:400px; letter-spacing: 0.1em; color:#000000;">
                        <img src="{{ asset('images/line_section.png') }}" alt=""><span class="ml-5">Посмотреть контакты</span></div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 pt-lg-0 pt-5" style="padding-left: 6%;">
                    <div class="mx-auto" style="max-width: 700px">
                    <h1 class="title-section open-sans font-weight-bold text-uppercase" data-aos="fade-right" style="color: #000000;">
                        <span class="green-letter">М</span>ы способствуем эволюции
                        ИТ - инфраструктуры организаци<span class="green-letter">и</span>
                    </h1>
                    <div class="pt-3">
                        <p class="desc-text open-sans" data-aos="fade-right" style="padding-right: 30%;">
                            Давно выяснено, что при оценке дизайна и
                            композиции читаемый текст мешает
                        </p>
                    </div>
                    <div class="text-center" data-aos="fade-right">
                        <button class="first-style-button open-sans text-white">
                            Обратный звонок
                        </button>
                    </div>
                    </div>
                </div>
                <div class="col-1 d-lg-block d-none"></div>
                <div class="col-lg-4 col-12 text-center d-flex pt-lg-0 pt-5">
                    <div class="position-absolute" style="z-index: 999; top:50%; left:50%; transform: translate(-50%, -50%);">
                        <a href="{{ asset('images/play_button.png') }}" data-fancybox="logic-video"><img src="{{ asset('images/play_button.png') }}" alt=""></a></div>
                    <img class="mx-auto" style="width:60%;" src="{{ asset('images/first_section_video.png') }}" alt="">
                </div>
            </div>
            <div class="position-absolute d-lg-block d-none" data-aos="fade-down" style="background:linear-gradient(180deg, #169B73 0%, #047762 100%); opacity: 0.92; top:0%; right:0%; width:35%; height:50%;"></div>
        </div>
    <div class="container-fluid bg" style="padding: 8% 0%;background-image: url({{ asset('images/second_section_bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12 pl-lg-0 pl-3">
                    <h2 class="title-section open-sans font-weight-bold text-uppercase text-white" data-aos="fade-right">
                        <span class="green-letter">О</span> нашей компани<span class="green-letter">и</span>
                    </h2>
                    <div class="pt-3">
                        <p class="desc-text open-sans text-white" data-aos="fade-right">
                            Мы – лидирующий системный интегратор Кыргызстана, который предоставляет инновационные продукты и решения с 1996 года. Высокий уровень компетенции и накопленный опыт позволяют нам качественно выполнять проекты любого масштаба.
                        </p>
                    </div>
                    <div class="padder" data-aos="fade-right" style="display:flex; align-items:center; padding-bottom:3%;">
                        <span class="green-letter" style="font-size: 50px; padding-right:2%;">23</span>
                        <span style="font-size:14px; color: white; text-transform:uppercase; ">года на рынке <br> информационных услуг</span>
                    </div>
                    <div class="pt-3" data-aos="fade-right">
                    <a href="/about_us" class="nectar-button second-style-button magger text-white" style="background:none!important; border-radius:20px!important;border: 1px solid #fefefe; padding-left:26px; padding-top:10px; padding-bottom:10px; padding-right:53px;"><span>Подробнее</span></a>
                    </div>
                </div>
                <div class="col-lg-7 col-12 text-lg-left text-center pt-lg-0 pt-5" data-aos="fade-up">
                    <div class="text-mo">Logic</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding:5% 0%;">
        <h2 class="title-section open-sans font-weight-bold text-uppercase text-center" data-aos="fade-up">
            <span class="green-letter">П</span>РОЦЕСС ВЗАИМОДЕЙСТВИЯ:
            <p style="font-weight: 300;">
                Как мы работае<span class="green-letter">М</span>
            </p>
        </h2>
        <div class="container pt-4">
        <div class="row">
            <div class="collona-advant p-4 text-center" data-aos="fade-right" style="background-image: url({{ asset('images/advant1.png') }})">
                <img src="{{ asset('images/support.png') }}" alt="">
                <p class="advant-text text-white pt-2">
                    Запрос от клиента
                </p>
            </div>
            <div class="collona-advant p-4 text-center" data-aos="fade-right" style="background-image: url({{ asset('images/advant2.png') }})">
                <img src="{{ asset('images/puzzle.png') }}" alt="">
                <p class="advant-text pt-2">
                    Разработка решения
                </p>
            </div>
            <div class="collona-advant p-4 text-center" data-aos="fade-right" style="background-image: url({{ asset('images/advant3.png') }})">
                <img src="{{ asset('images/customer-service1.png') }}" alt="">
                <p class="advant-text text-white pt-2">
                    Согласование
                    решения с клиентом
                </p>
            </div>
            <div class="collona-advant p-4 text-center" data-aos="fade-right" style="background-image: url({{ asset('images/advant2.png') }})">
                <img src="{{ asset('images/puzzle1.png') }}" alt="">
                <p class="advant-text pt-2">
                    Предоставления коммерческого предложения
                </p>
            </div>
            <div class="collona-advant p-4 text-center" data-aos="fade-right" style="background-image: url({{ asset('images/advant3.png') }})">
                <img src="{{ asset('images/support.png') }}" alt="">
                <p class="advant-text text-white pt-2">
                    Заключение
                    договора
                </p>
            </div>
            <div class="collona-advant p-4 text-center" data-aos="fade-right" style="background-image: url({{ asset('images/advant2.png') }})">
                <img src="{{ asset('images/puzzle.png') }}" alt="">
                <p class="advant-text pt-2">
                    Реализация
                    проекта
                </p>
            </div>
            <div class="collona-advant p-4 text-center" data-aos="fade-right" style="background-image: url({{ asset('images/advant3.png') }})">
                <img src="{{ asset('images/customer-service1.png') }}" alt="">
                <p class="advant-text text-white pt-2">
                    Сервисная
                    поддержка
                </p>
            </div>
        </div>
        </div>
    </div>
    <div class="container-fluid bg d-flex align-items-center third_section" style="background-image: url({{ asset('images/third_section_bg.png') }}); height:1000px; background-size: auto; overflow-x: hidden">
        <div class="container">
            <div class="row">
                <div class="d-lg-none d-block my-5 col-12">
                <div class="text-uppercase text-center" data-aos="fade-up" style="line-height: 140%; font-size: 30px; font-weight: 700;">
                    Наша экспертиза
                </div>
                </div>
                <div class="ex-collona mr-lg-3 mr-0">
                    <div class="p-3 bg ex-block" data-aos="fade-right" style="background-image: url({{ asset('images/ex1.png') }})">
                        <p class="ex-title">
                            Серверное оборудование
                        </p>
                        <p class="ex-text">
                            Серверы от мировых
                            производителей под любые
                            задачи и требования
                            организации.
                        </p>
                    </div>
                    <div class="p-3 mt-3 bg ex-block" data-aos="fade-right" style="background-image: url({{ asset('images/ex1.png') }})">
                        <p class="ex-title">
                            Центр обработки данных
                        </p>
                        <p class="ex-text">
                            Ваши ИТ-ресурсы в безопасном месте.
                        </p>
                    </div>
                </div>
                <div class="ex-collona mt-lg-0 mt-3">
                    <div class="p-3 bg ex-block" data-aos="fade-right" style="background-image: url({{ asset('images/ex1.png') }})">
                        <p class="ex-title">
                            Серверное оборудование
                        </p>
                        <p class="ex-text">
                            Универсальные устройства для построения сетей связи и ИТ-инфраструктуры организаций.
                        </p>
                    </div>
                    <div class="p-3 mt-3 bg ex-block" data-aos="fade-right" style="background-image: url({{ asset('images/ex1.png') }})">
                        <p class="ex-title">
                            Персональные системы
                        </p>
                        <p class="ex-text">
                            Широкий выбор продукции для обеспечения максимальной производительности и выполнения сложных работ.
                        </p>
                    </div>
                </div>
                <div class="ex-collona align-items-center d-lg-flex d-none">
                    <p class="text-uppercase text-center text-white" data-aos="fade-up" style="line-height: 140%; font-size: 30px; font-weight: 700;">
                        Наша экспертиза
                    </p>
                </div>
                <div class="ex-collona mr-lg-3 mr-0 mt-lg-0 mt-3">
                    <div class="p-3 bg ex-block" data-aos="fade-left" style="background-image: url({{ asset('images/ex1.png') }})">
                        <p class="ex-title">
                            Печатное оборудование
                        </p>
                        <p class="ex-text">
                            Качественное оборудование для печати, переноса изображения и обработки.
                        </p>
                    </div>
                    <div class="p-3 mt-3 bg ex-block" data-aos="fade-left" style="background-image: url({{ asset('images/ex1.png') }})">
                        <p class="ex-title">

                            Программное обеспечение
                        </p>
                        <p class="ex-text">
                            Большое количество программной продукции, позволяющей решить любые бизнес-задачи.
                        </p>
                    </div>
                </div>
                <div class="ex-collona mt-lg-0 mt-3">
                    <div class="p-3 bg ex-block" data-aos="fade-left" style="background-image: url({{ asset('images/ex1.png') }})">
                        <p class="ex-title">

                            Сервисная поддержка
                        </p>
                        <p class="ex-text">
                            Авторизованный сервис-центр HP Inc. и Konica Minolta
                            и услуги IT-аутсорсинга
                        </p>
                    </div>
                    <div class="p-3 mt-3 bg ex-block" data-aos="fade-left" style="background-image: url({{ asset('images/ex1.png') }})">
                        <p class="ex-title">

                            Кибербезопасность
                        </p>
                        <p class="ex-text">
                            Программно-аппаратные комплексы, решающие современные проблемы информационной безопасности.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-lg-0 mt-5">
        <h2 class="title-section open-sans font-weight-bold text-uppercase text-center" data-aos="fade-up">
            <span class="green-letter">Н</span>аши реализованные проект<span class="green-letter">ы</span>
        </h2>
        <div class="container bg mt-5 p-lg-5 p-0 forth_section" style="background-image: url({{ asset('images/forth_section_bg.png') }}); box-shadow: 0 30px 50px 0px #4e4e4e5c; background-size: 100% 100%">
            <div class="row">
                <div class="col-lg-4 col-12 p-3">
                    @if(isset($projects[0]))
                    <div class="p-4 project-block" data-aos="fade-right" style="background-image: url({{ asset('images/projects.png') }});">
                    <p class="ex-title">
                        {{ $projects[0]->title }}
                    </p>
                    <p class="ex-text">
                        {{ $projects[0]->mini_desc }}
                    </p>
                    </div>
                    @endif
                    @if(isset($projects[1]))
                    <div class="p-4 project-block mt-4" data-aos="fade-right" style="background-image: url({{ asset('images/projects.png') }});">
                        <p class="ex-title">
                            {{ $projects[1]->title }}
                        </p>
                        <p class="ex-text">
                            {{ $projects[1]->mini_desc }}
                        </p>
                    </div>
                        @endif
                    <div class="pt-5 d-lg-block d-none">
                    <a href="/projects" class="third-button d-none-media"  data-aos="fade-right" style="background:none!important; border-radius:20px!important;border: 1px solid #000000; padding-left:26px; padding-top:10px; padding-bottom:10px; padding-right:53px; margin-top:5%;"><span style="color:black;">Подробнее</span></a>
                    </div>
                    </div>

                <div class="col-lg-4 col-12 p-3">
                    @if(isset($projects[2]))
                    <div class="p-4 project-block" data-aos="fade-right" style="background-image: url({{ asset('images/projects.png') }});">
                        <p class="ex-title">
                            {{ $projects[2]->title }}
                        </p>
                        <p class="ex-text">
                            {{ $projects[2]->mini_desc }}
                        </p>
                    </div>
                    @endif
                        @if(isset($projects[3]))
                    <div class="p-4 project-block mt-4" data-aos="fade-right" style="background-image: url({{ asset('images/projects.png') }});">
                        <p class="ex-title">
                            {{ $projects[3]->title }}
                        </p>
                        <p class="ex-text" >
                            {{ $projects[3]->mini_desc }}
                        </p>
                    </div>
                        @endif
                </div>
                <div class="pt-5 d-lg-none d-block pl-4">
                    <a href="/projects" class="third-button d-none-media" data-aos="fade-right" style="background:none!important; border-radius:20px!important;border: 1px solid #000000; padding-left:26px; padding-top:10px; padding-bottom:10px; padding-right:53px; margin-top:5%;"><span style="color:black;">Подробнее</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container clients" style="margin-top:10%;">
        <div class="row justify-content-center mt-lg-0">
            <div class="col-lg-8 col-12 px-0">
             <h2 class="title-section open-sans font-weight-bold text-uppercase text-center"  data-aos="fade-up">
                  <span class="green-letter">Г</span>ОРДИМСЯ РАБОТОЙ С НАШИМИ
                 КЛИЕНТАМ<span class="green-letter">И</span>
             </h2>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            @foreach($clients as $client)
            <div class="col-lg-2 col-4 p-lg-5 p-3 client-column d-flex align-items-center" data-aos="fade-up">
                <a href="{{$client->link}}" data>
                <img class="img-fluid mx-auto client-image" src="{{ asset('storage/'.$client->image) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid bg" style="background-image: url({{ asset('images/sixth_section_bg.png') }}); margin-top:7%;">
        <div class="container" style="padding:7% 0%;">
            <div class="row">
            <div class="col-lg-6 col-12 px-5">
                <h2 class="text-uppercase px-lg-5 px-2 text-white text-center font-weight-bold"  data-aos="fade-right" style="font-size: 55px; line-height: 100%;">
                    <span class="green-letter">Н</span>аша
                    Команд<span class="green-letter">а</span>
                </h2>
            </div>
            <div class="col-lg-6 col-12 pr-lg-5 pr-0 py-lg-0 py-4">
                <p class="desc-text text-white pr-lg-5 pr-0 pl-lg-0 pl-3"  data-aos="fade-left">
                    Все наши сотрудники — опытные и профессиональные
                    специалисты IT-индустрии, которые всегда найдут
                    правильный путь решения даже самых насущных
                    проблем клиента.
                </p>
                <div class="mt-4 pl-lg-0 pl-3">
                <a href="/team" class="nectar-button second-style-button magger text-white" data-aos="fade-left" style="background:none!important; border-radius:20px!important;border: 1px solid #fefefe; padding-left:26px; padding-top:10px; padding-bottom:10px; padding-right:53px;"><span>Подробнее</span></a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="title-section open-sans font-weight-bold text-uppercase text-center" data-aos="fade-up">
                    <span class="green-letter">П</span>АРТНЕРСТВО СО МНОГИМИ КОМПАНИЯМ<span class="green-letter">И</span>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            @foreach($partners as $partner)
            <div class="col-lg-2 col-4 client-column p-lg-5 p-3 d-flex align-items-center" data-aos="fade-up">
                <a href="{{ $partner->link }}">
                <img class="img-fluid client-image mx-auto" src="{{ asset('storage/'.$partner->image) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container" style="margin-top:7%;">
        <h2 class="title-section open-sans font-weight-bold text-uppercase text-center mt-lg-0 mt-5"  data-aos="fade-up">
            <span class="green-letter">Н</span>ОВОСТИ И СОБЫТИЯ КОМПАНИ<span class="green-letter">И</span>
        </h2>

        <div class="row justify-content-center"  data-aos="fade-up">
            <div class="col-lg-5 col-12">
                <p class="desc-text text-center">
                    Мы рады поделиться событиями, новостями
                    нашей компании и наших партнеров.
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6 col-12 p-5" data-aos="fade-right" style="background-image: url({{ asset('images/news_block.png') }}); box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.15);">
                <p class="desc-text text-white">{{ \Carbon\Carbon::parse($news[0]->created_at)->format('Y.m.d') }}</p>
                <p class="news-title text-white mt-3">
                    {{ $news[0]->title }}
                </p>
                <p class="desc-text text-white mt-3">
                    {{ str_limit($news[0]->description, $limit = 155, $end = '...') }}
                </p>
                <a href="{{ route('news_page',['id' => $news[0]->id]) }}" class="second-style-button text-white" style="background:none!important; padding-left:5px; padding-top:10px; padding-bottom:10px; padding-right:35px; margin-bottom:20%"><span>Читать полностью</span></a>
            </div>
            <div class="col-lg-6 col-12 px-lg-3 px-0 pt-lg-0 pt-3"  data-aos="fade-left">
                <img class="w-100" style="box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.15);" src="{{ asset('images/news2.png') }}" alt="">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-6 col-12 px-0" data-aos="fade-left">
                        @if(isset($news[1]))
                            <a style="text-decoration: none;" href="{{ route('news_page', ['id' => $news[1]->id]) }}">
                        <div class="news-block p-3 mr-lg-2 mr-0 h-100" style="box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.15); color:#000000;">
                        <p class="desc-text">
                            {{ \Carbon\Carbon::parse($news[1]->created_at)->format('Y.m.d') }}
                        </p>
                        <p class="news-title mt-3">
                            {{ $news[1]->title }}
                        </p>
                        <p class="desc-text"  style="line-height: 19px">
                            {{ str_limit($news[1]->description, $limit = 95, $end = '...') }}

                        </p>
                        </div>
                            </a>
                            @endif
                    </div>
                    <div class="col-lg-6 col-12 px-0 pt-lg-0 pt-3"  data-aos="fade-left">
                        @if(isset($news[2]))
                            <a style="text-decoration: none;" href="{{ route('news_page', ['id' => $news[2]->id]) }}">
                        <div class="news-block p-3 ml-lg-2 ml-0 h-100" style="box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.15); color: #000000;">
                            <p class="desc-text">
                                {{ \Carbon\Carbon::parse($news[2]->created_at)->format('Y.m.d') }}
                            </p>
                            <p class="news-title mt-3">
                                {{ $news[2]->title }}
                            </p>
                            <p class="desc-text" style="line-height: 19px">
                                {{ str_limit($news[2]->description, $limit = 95, $end = '...') }}
                            </p>
                        </div>
                            </a>
                            @endif
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
@endsection

