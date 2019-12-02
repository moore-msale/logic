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
                <div class="sand-step d-lg-flex d-none align-items-center" data-aos="fade-up">
                    <a style="color: #000000;" href="/">Главная</a><img class="mx-2" src="{{ asset('images/arrow.svg') }}" alt=""><a style="color: #000000;" href="#">Новости и события</a>
                </div>
                <div class="mt-4">
                    <h2 class="title-section open-sans font-weight-bold" data-aos="fade-up">
                        <span class="green-letter">Н</span>овости и событи<span class="green-letter">я</span>
                    </h2>

                </div>
            </div>

            <div class="row pt-5">
                @foreach($news as $new)
                <div class="col-lg-3 col-12 mt-4">
                    <div class="news-block p-3 h-100" data-aos="fade-up">
                        <img src="{{ asset('images/newspaper.png') }}" alt="">
                        <p class="news-title pt-3">
                            {{ $new->title }}
                        </p>
                        <p class="news-desc">
                            {{ str_limit($new->description, $limit = 75, $end = '...') }}
                        </p>
                    </div>
                    <div class="position-relative" style="bottom:100px;left:45px;">
                        <a href="{{ route('news_page',['id' => $new->id]) }}">
                            <button class="first-style-button open-sans text-white my-3 pointer translateY-1">
                                Читать новость
                            </button>
                        </a>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection