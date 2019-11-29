@extends('layouts.app')
@push('styles')
    <style>
       body
       {
           background:#F5F5F5;
       }
       @media screen and (max-width: 768px){
           .title-section
           {
               font-size: 28px;
           }
           .marginable
           {
               margin-top:0%!important;
           }
       }
       @media screen and (max-width: 340px){
           .path_1
           {
               width: 150px!important;
           }
       }
    </style>
@endpush
@section('content')
    <div class="container-fluid" style="padding-top: 10%; padding-bottom: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 pt-lg-0 pt-5">
                    <div class="sand-step d-lg-flex d-none align-items-center" data-aos="fade-right">
                        <a style="color: #000000;" href="/">Главная</a><img class="mx-2" src="{{ asset('images/arrow.svg') }}" alt=""><a style="color: #000000;" href="#">О компании</a>
                    </div>
            <div class="mt-4" style="max-width: 600px;">
            <h2 class="title-section open-sans font-weight-bold text-uppercase" data-aos="fade-right">
                <span class="green-letter">М</span>ы способствуем эволюции
                ИТ - инфраструктуры организаци<span class="green-letter">й</span>
            </h2>
            </div>
                <div class="bg align-items-end mr-5 position-relative d-lg-flex d-none">
                    <img class="w-100" style="position: absolute; top:0%; z-index:-1;" data-aos="fade-right" src="{{ asset('images/about_us1.png') }}" alt="">
                        {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                    <p class="about-text px-lg-5 px-0" style="padding-top: 35%;" data-aos="fade-right">
                         История нашей компании началась в 1996 году с открытия компьютерного салона «Multimedia». Уже тогда нас отличал широкий ассортимент и качество обслуживания. Придя в салон, клиенты всегда могли найти новейшие модели компьютерной и офисной техники, а также заказать эксклюзивные товары.
                    </p>
                </div>
                </div>
                <div class="col-lg-5 col-12 position-relative" style="padding-top:8%;">
                    <img class="w-100" src="{{ asset('images/klyaksa.png') }}" alt="">
                    <div class="position-absolute px-5 derevo" style="top:38%; left:13%;">
                    @include('partials.about_svg')
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12 d-lg-none d-block">
                    <div class="bg d-flex align-items-end mr-lg-5 mr-0 position-relative">
                        <img class="w-100" style="position: absolute; top:0%; z-index:-1;" data-aos="fade-right" src="{{ asset('images/about_us1.png') }}" alt="">
                        {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                        <p class="about-text px-lg-5 px-0" style="padding-top: 35%;" data-aos="fade-right">
                            История нашей компании началась в 1996 году с открытия компьютерного салона «Multimedia». Уже тогда нас отличал широкий ассортимент и качество обслуживания. Придя в салон, клиенты всегда могли найти новейшие модели компьютерной и офисной техники, а также заказать эксклюзивные товары.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="bg d-flex align-items-end position-relative marginable" style="margin-top:35%;">
                        <img class="w-100" style="position: absolute; top:0%; z-index: -1;" data-aos="fade-right" src="{{ asset('images/about_us3.png') }}" alt="">
                            {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                            <p class="about-text px-lg-5 px-0" style="padding-top: 35%" data-aos="fade-right">
                                К 2005 году компания «Logic» имела сильнейшие позиции в каждом из сегментов. Сеть розничных магазинов предлагала широчайший ассортимент компьютерной, офисной техники и аксессуаров. За спиной корпоративного отдела были десятки успешно реализованных крупных ИТ - проектов для бизнеса с госсектора. Обширная дистрибьюторская сеть обеспечила высокий уровень узнаваемости и представленность партнерских брендов на рынке. Сервисный центр получил авторизацию у ряда мировых производителей и осуществлял гарантийную и постгарантийную поддержку огромного спектра оборудования.
                            </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="bg d-flex align-items-end position-relative">
                        <img class="w-100" style="position: absolute; top:0%; z-index: -1;" data-aos="fade-left" src="{{ asset('images/about_us2.png') }}" alt="">
                        {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                        <p class="about-text px-lg-5 px-0" style="padding-top: 35%" data-aos="fade-left">
                            Следующая веха развития пришлась на 2001 год. Компания была переименована в «Logic», а приобретённый опыт и хорошая репутация на рынке позволили нам заключить партнерские соглашения с несколькими ведущими ИТ - производителями. Было принято решение о расширении сферы деятельности. Теперь у компании 3 направления: розничная торговля, корпоративные продажи и дистрибуция.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="d-flex align-items-end position-relative marginable" style="margin-top: 35%;">
                        <img class="w-100" style="position: absolute; top:0%; z-index: -1;" data-aos="fade-right" src="{{ asset('images/about_us5.png') }}" alt="">

                        <p class="about-text px-lg-5 px-0" style="padding-top: 35%;" data-aos="fade-right">
                            Став ведущей ИТ- компанией в Кыргызстане, собрав уникальную команду профессионалов, в 2011 году компания «Logic» выходит на рынок Республики Казахстан. Сегодня Logic – компания, занимающая уверенную позицию на рынке и смело идущая вперед к новым горизонтам.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="bg d-flex align-items-end position-relative">
                        <img class="w-100" style="position: absolute; top:0%; z-index: -1;" data-aos="fade-left" src="{{ asset('images/about_us4.png') }}" alt="">
                        {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                        <p class="about-text px-lg-5" style="padding-top: 35%" data-aos="fade-left">
                            В 2008 году состоялся пересмотр стратегии развития компании и приоритеты сместились в сторону самого сложного и самого интересного сегмента - В2B/B2G. С этого момента в компании начался этап постоянного обучения сотрудников и регулярного внедрения инноваций как в своей деятельности, так и в деятельности наших клиентов.                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background:white;">
        <div class="container" style="padding:7% 0%;">
            <div class="row" style="padding-bottom: 15%;">
                <div class="d-lg-none d-block col-12">
                    <p class="title-section font-weight-bold text-center py-3">
                        Наши клиенты
                    </p>
                    <div class="row pb-5">
                        <div class="col-6 text-center">
                            <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('images/partner1.png') }}" alt="">
                        </div>
                        <div class="col-6 text-center">
                            <img data-aos="fade-left" style="max-width:100%;" src="{{ asset('images/partner3.png') }}" alt="">
                        </div>
                        <div class="col-6 text-center">
                            <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('images/partner2.png') }}" alt="">
                        </div>
                        <div class="col-6 text-center">
                            <img data-aos="fade-left" style="max-width:100%;" src="{{ asset('images/partner4.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-6 text-right d-lg-block d-none">
                    <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('images/partner1.png') }}" alt="">
                    <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('images/partner2.png') }}" alt="">
                    <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('images/partner3.png') }}" alt="">
                    <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('images/partner4.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-12">
                    <p data-aos="fade-down" class="about-text">
                        За время многолетнего партнерства с международными корпорациями, крупным и средним бизнесом и государственными организациями мы накопили огромный практический опыт в создании ИТ - решений для различных отраслей и оказании эффективной поддержки каждому клиенту на пути к цифровой трансформации его деятельности.
                    </p>
                    <p data-aos="fade-down" class="about-text">
                        Творческий подход к сложным задачам позволяет нам создавать для каждого клиента индивидуальный продукт. Возможны как типовые ИТ - решения, адаптированные под запросы клиента, так и масштабные комплексные проекты покрывающие все области деятельности организации.
                    </p>
                    <p data-aos="fade-down" class="about-text">
                        Также мы готовы обеспечить широкий выбор средств реализации предлагаемых решений благодаря многолетнему сотрудничеству с ведущими ИТ - производителями.
                    </p>
                </div>
                <div class="col-4 d-lg-block d-none" data-aos="fade-left">
                    <p class="rotate-text">
                        Наши
                        клиенты
                    </p>
                </div>
            </div>
            <div class="row" style="padding-bottom:10%;">
                <div class="col-6 position-relative d-lg-block d-none" style="background-color: #F5F5F5;">
                    <img class="position-absolute w-75" data-aos="fade-right" style="top:-35%; right:0%;" src="{{ asset('images/sotrudniki.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-12 pl-lg-5 pl-3">
                    <h3 class="logic-text text-uppercase" data-aos="fade-left">
                        Logic
                    </h3>
                    <p class="about-text" data-aos="fade-left">
                        это команда профессионалов, для которых клиентоориентированность является ключевым принципом работы. Для нас нет невыполнимых задач в сфере информационных технологий. В каждом сложном проекте мы видим возможность помочь клиенту и повысить свой профессиональный уровень.
                    </p>
                </div>
            </div>
            <div class="row" style="padding-bottom:7%;">
                <div class="col-lg-6 col-12 pr-lg-5 pr-0">
                    <img class="pb-lg-5 pb-3" data-aos="fade-right" src="{{ asset('images/team1.png') }}" alt="">
                    <h3 class="logic-text text-uppercase" style="font-size:30px;" data-aos="fade-right">
                        Мы решаем любые задачи
                    </h3>
                    <p class="about-text" data-aos="fade-right">
                        Мы решаем любые задачи в сфере информационных технологий. Каждый проект, за который мы беремся, уникален и преследует конкретные цели. Наша команда предлагает самые современные решения, позволяющие клиенту не только достичь целей проекта, но и значительно повысить эффективность использования ИТ в его деятельности.
                    </p>
                </div>
                <div class="col-lg-6 col-12 pl-lg-5 pl-3">
                    <img class="pb-lg-5 pb-3" data-aos="fade-left" src="{{ asset('images/team2.png') }}" alt="">
                    <h3 class="logic-text text-uppercase" data-aos="fade-left" style="font-size:30px;">
                        В нашей компетенции
                    </h3>
                    <p class="about-text" data-aos="fade-left">
                        Создание центров обработки данных (ЦОД);
                        Возведение серверных комплексов;
                        Построение корпоративных сетей передачи данных; Внедрение систем корпоративной печати;
                        Организация поставок ИТ-оборудования и программного обеспечения;
                        Сервисное сопровождение.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-12" style="padding-bottom:7%;">
                <h2 class="about_titles" data-aos="fade-right">
                    В чем наши преимущества?
                </h2>
                </div>
                <div class="col-12"></div>
                <div class="col-lg-4 col-12">
                    <img class="pt-lg-0 pt-4" data-aos="fade-up" src="{{ asset('images/about_adv1.png') }}" alt="">
                    <h3 data-aos="fade-up" class="adv-title font-weight-bold pt-lg-5 pt-3">
                        Экономия времени
                    </h3>
                    <p data-aos="fade-up" class="about-text">
                        Мы нацелены на долгосрочные отношения, основе которых лежит понимание деятельности клиента и ориентация на решение его задач. Такой формат позволяет нам своевременно выявить проблемы, сформировать команду специалистов для работы над проектом и оценить экономическую целесообразность предлагаемого ИТ-решения.
                    </p>
                </div>
                <div class="col-lg-4 col-12">
                    <img class="pt-lg-0 pt-4" data-aos="fade-up" src="{{ asset('images/about_adv2.png') }}" alt="">
                    <h3 data-aos="fade-up" class="adv-title font-weight-bold pt-lg-5 pt-3">
                        Репутация и опыт
                    </h3>
                    <p data-aos="fade-up" class="about-text">
                        Компания «Logic» обладает уникальным опытом реализации проектов различного уровня сложности и репутацией надежного поставщика ИТ-решений на рынке Кыргызстана. Мы дорожим доверием клиентов, партнеров, коллег и, чтобы сохранить его, всегда делаем упор на качество и профессионализм.                    </p>
                </div>
                <div class="col-lg-4 col-12">
                    <img class="pt-lg-0 pt-4" data-aos="fade-up" src="{{ asset('images/about_adv3.png') }}" alt="">
                    <h3 data-aos="fade-up" class="adv-title font-weight-bold pt-lg-5 pt-3">
                        Высокое качество
                    </h3>
                    <p data-aos="fade-up" class="about-text">
                        Использование передовых информационных технологий позволяет многократно увеличить эффективность любой деятельности, выйти на новую ступень развития. Именно поэтому для построения и совершенствовании ИТ-инфраструктуры мы выбираем оборудование от лидеров рынка в своем сегменте, таких как Hewlett PackardEnterprise, HP Inc., Konica Minolta, Cisco и др.
                    </p>
                </div>
            </div>
    </div>

</div>



@endsection