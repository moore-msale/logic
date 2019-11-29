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

<div class="container-fluid" style="padding-top: 10%; padding-bottom: 10%;">
    <div class="container">
        <div class="pt-lg-0 pt-5">
            <div class="sand-step d-lg-flex d-none align-items-center justify-content-center" data-aos="fade-up">
                <a style="color: #000000;" href="/">Главная</a><img class="mx-2" src="{{ asset('images/arrow.svg') }}" alt=""><a style="color: #000000;" href="#">Наша команда</a>
            </div>
            <div class="mt-4 text-center">
                <h2 class="title-section open-sans font-weight-bold text-uppercase" data-aos="fade-up">
                    <span class="green-letter">Н</span>аша команд<span class="green-letter">а</span>
                </h2>
                <div class="d-flex justify-content-center">
                <p class="team-title" data-aos="fade-up" style="max-width: 438px;">
                    Самый ценный ресурс нашей компании - это наши сотрудники
                </p>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <img class="w-100" data-aos="flip-down" src="{{ asset('images/team.png') }}" alt="">
        </div>

        <div class="row pt-5 mt-5">
            <div class="col-lg-3 col-12">
                <img data-aos="fade-up" src="{{ asset('images/teams1.png') }}" alt="">
                <p data-aos="fade-up" class="team-point-title pt-4">
                    Опытная команда
                </p>
                <p data-aos="fade-up" class="team-desc pt-2">
                    Преимущество нашей команды - это комплексная экспертиза и многолетний опыт при решении поставленной задачи.
                </p>
            </div>
            <div class="col-lg-3 col-12">
                <img data-aos="fade-up" src="{{ asset('images/teams2.png') }}" alt="">
                <p data-aos="fade-up" class="team-point-title pt-4">
                    Проактивность
                </p>
                <p data-aos="fade-up" class="team-desc pt-2">
                    Проактивность – мы всегда на шаг впереди. Мы проявляем инициативу, чтобы усовершенствовать процессы и стать еще лучше для наших клиентов.                </p>
            </div>
            <div class="col-lg-3 col-12">
                <img data-aos="fade-up" src="{{ asset('images/teams3.png') }}" alt="">
                <p data-aos="fade-up" class="team-point-title pt-4">
                    Профессионализм
                </p>
                <p data-aos="fade-up" class="team-desc pt-2">
                    Профессионализм сотрудников, которых наша компания взращивает и воспитывает собственными силами, позволяет в полной мере удовлетворить самые высокие требования клиента.                </p>
            </div>
            <div class="col-lg-3 col-12">
                <img data-aos="fade-up" src="{{ asset('images/teams4.png') }}" alt="">
                <p data-aos="fade-up" class="team-point-title pt-4">
                    Командный дух
                </p>
                <p data-aos="fade-up" class="team-desc pt-2">
                    Работая в команде мы достигаем отличных результатов, покоряем новые вершины, мыслим масштабно и находим решения на сложные нестандартные задачи.                </p>
            </div>
        </div>
    </div>
</div>


@endsection