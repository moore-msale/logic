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
                    <?php
                    $title = strlen($content->title);
                    ?>
                    <span class="green-letter">{{ substr($content->title, 0,2)  }}</span>{!!  substr($content->title, 2,$title - 4)  !!}<span class="green-letter">{!!  substr($content->title, $title - 2,$title - 1)  !!}</span>
                </h2>
                <div class="d-flex justify-content-center">
                <p class="team-title" data-aos="fade-up" style="max-width: 438px;">
                   {{ $content->pretitle }}
                </p>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <img class="w-100" data-aos="flip-down" src="{{ asset('storage/'.$content->image) }}" alt="">
        </div>

        <div class="row pt-5 mt-5">
            <div class="col-lg-3 col-md-6 col-12">
                <img data-aos="fade-up" src="{{ asset('storage/'.$content->opc1_image) }}" alt="">
                <p data-aos="fade-up" class="team-point-title pt-4">
                    {{ $content->opc1_title }}
                </p>
                <p data-aos="fade-up" class="team-desc pt-2">
                    {{ $content->opc1_desc }}
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <img data-aos="fade-up" src="{{ asset('storage/'.$content->opc2_image) }}" alt="">
                <p data-aos="fade-up" class="team-point-title pt-4">
                    {{ $content->opc2_title }}
                </p>
                <p data-aos="fade-up" class="team-desc pt-2">
                    {{ $content->opc2_desc }}
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <img data-aos="fade-up" src="{{ asset('storage/'.$content->opc3_image) }}" alt="">
                <p data-aos="fade-up" class="team-point-title pt-4">
                    {{ $content->opc3_title }}
                </p>
                <p data-aos="fade-up" class="team-desc pt-2">
                    {{ $content->opc3_desc }}
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <img data-aos="fade-up" src="{{ asset('storage/'.$content->opc4_image) }}" alt="">
                <p data-aos="fade-up" class="team-point-title pt-4">
                    {{ $content->opc4_title }}
                </p>
                <p data-aos="fade-up" class="team-desc pt-2">
                    {{ $content->opc4_desc }}
                </p>
            </div>
        </div>


        <div class="pt-5 mt-3">
            @if(count($vacancies))
                <p class="team-point-title pb-3 text-center" data-aos="fade-up">
                    Открытые вакансии
                </p>
                @foreach($vacancies as $vacancy)
                    <div class="py-4 mb-4" style="padding: 0% 10%; background-color:#F6F6F6;" data-aos="fade-up">
                        {!! $vacancy->data !!}
                    </div>
                @endforeach
            @else
                <p class="team-point-title pb-3 text-center" data-aos="fade-up">
                    Вакансии отсутствуют
                </p>
            @endif
        </div>
    </div>
</div>


@endsection