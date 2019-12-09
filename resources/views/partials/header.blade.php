<?php
    $contact = \App\Contact::all()->first();
?>

<nav class="navbar menuse navbar-expand-lg navbar-light bg-transparent fixed-top d-lg-block d-none">
    <div class="container">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('images/footer-logo.svg') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto" id="menu">
            <li class="nav-item active font-weight-normal mx-2">
                <a class="nav-link menu-point {{ \Illuminate\Support\Facades\Request::is('*about_us*') ?  'font-weight-bold' : ''}}" href="/about_us">О нас</a>
            </li>
            <li class="nav-item font-weight-normal mx-2">
                <a class="nav-link menu-point  links" href="#services">Услуги</a>
            </li>
            <li class="nav-item font-weight-normal mx-2">
                <a class="nav-link menu-point  links" href="#projects">Проекты</a>
            </li>
            <li class="nav-item font-weight-normal mx-2">
                <a class="nav-link menu-point  links" href="#clients">Клиенты</a>
            </li>
            <li class="nav-item font-weight-normal mx-2">
                <a class="nav-link menu-point  links" href="#jobs">Вакансии</a>
            </li>
            <li class="nav-item font-weight-normal mx-2">
                <a class="nav-link menu-point  links" href="#partners">Партнеры</a>
            </li>

            <li class="nav-item font-weight-normal mx-2">
                <a class="nav-link menu-point  links" href="#contacts">Контакты</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item call-btn font-weight-normal mx-2">
                <button class="bg-light py-2 px-4 font-weight-normal modal-button pointer" data-toggle="modal" data-target="#callModal" style=" box-shadow: 0 10px 50px rgba(0,0,0,0.08), 0 13px 45px rgba(0,0,0,0.08);">
                    Обратный звонок
                </button>
            </li>
            <li class="nav-item font-weight-normal mx-2 d-lg-block d-none">
                <a class="nav-link menu-point icos" style="color:#000000" href="{{$contact->instagram_link}}"><i class="fab fa-instagram fa-lg"></i></a>
            </li>
            <li class="nav-item font-weight-normal icos mx-2 d-lg-block d-none">
                <a class="nav-link menu-point icos" style="color: #000000;" href="{{ $contact->facebook_link }}"><i class="fab fa-facebook-square fa-lg"></i></a>
            </li>
        </ul>
    </div>
    </div>
</nav>

<nav class="navbar solid-nav shadow navbar-expand-lg navbar-light bg-transparent fixed-top d-lg-none d-block">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/footer-logo.svg') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto" id="menu2">
                <li class="nav-item active font-weight-normal mx-2">
                    <a class="nav-link menu-point" href="/about_us">О нас</a>
                </li>
                <li class="nav-item font-weight-normal mx-2">
                    <a class="nav-link menu-point  links" href="#services">Услуги</a>
                </li>
                <li class="nav-item font-weight-normal mx-2">
                    <a class="nav-link menu-point  links" href="#projects">Проекты</a>
                </li>
                <li class="nav-item font-weight-normal mx-2">
                    <a class="nav-link menu-point  links" href="#clients">Клиенты</a>
                </li>
                <li class="nav-item font-weight-normal mx-2">
                    <a class="nav-link menu-point  links" href="#jobs">Вакансии</a>
                </li>
                <li class="nav-item font-weight-normal mx-2">
                    <a class="nav-link menu-point  links" href="#partners">Партнеры</a>
                </li>
                <li class="nav-item font-weight-normal mx-2">
                    <a class="nav-link menu-point  links" href="#contacts">Контакты</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item font-weight-normal mx-2 mt-2">
                    <button class="bg-light py-2 px-4 font-weight-normal modal-button"  data-toggle="modal" data-target="#callModal"  style=" box-shadow: 0 10px 50px rgba(0,0,0,0.08), 0 13px 45px rgba(0,0,0,0.08);">
                        Обратный звонок
                    </button>
                </li>
                <div class="d-flex py-3">
                <li class="nav-item font-weight-normal mx-4">
                    <a class="nav-link menu-point icos" style="color:#000000" href="{{$contact->instagram_link}}"><i class="fab fa-instagram fa-lg"></i></a>
                </li>
                <li class="nav-item font-weight-normal icos mx-4">
                    <a class="nav-link menu-point icos" style="color: #000000;" href="{{ $contact->facebook_link }}"><i class="fab fa-facebook-square fa-lg"></i></a>
                </li>
                </div>
            </ul>
        </div>
    </div>
</nav>