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
                    <a style="color: #000000;" href="/">Главная</a><img class="mx-2" src="{{ asset('images/arrow.svg') }}" alt=""><a style="color: #000000;" href="/news">Новости и события</a><img class="mx-2" src="{{ asset('images/arrow.svg') }}" alt=""><a style="color: #000000;" href="#">{{ $new->title }}</a>
                </div>
                <div class="mt-4 text-center">
                    <h2 class="title-section open-sans font-weight-bold" data-aos="fade-up">
                      {{ $new->title }}
                    </h2>
                    <div class="row justify-content-center pt-3">
                        <p class="news-desc-desc text-left" data-aos="fade-up" style="max-width: 950px;">
                            {!! $new->description   !!}
                        </p>

                    </div>
                </div>
            </div>
            <div class="row pt-5">
                @foreach($new->images as $image)
                <div class="col-lg-4 col-12 pt-4">
                    <a href="{{ asset('storage/'.$image->image)  }}"  data-fancybox="new-{{$new->id}}" >
                    <img class="w-100" src="{{ asset('storage/'.$image->image) }}" alt="">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection