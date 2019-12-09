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
                    <a style="color: #000000;" href="/">Главная</a><img class="mx-2" src="{{ asset('images/arrow.svg') }}" alt=""><a style="color: #000000;" href="#">Наши реализованные проекты</a>
                </div>
                <div class="mt-4">
                    <h2 class="title-section open-sans font-weight-bold" data-aos="fade-up" style="max-width: 404px;">
                        <span class="green-letter">Н</span>аши реализованные проект<span class="green-letter">ы</span>
                    </h2>

                </div>
            </div>

            <div class="row pt-5">
                @foreach($projects as $project)
                <div class="col-lg-3 col-md-6 col-12 mt-4">
                    <a href="{{ route('project_page',['id' => $project->id]) }}" style="color:#000000; text-decoration: none;">
                    <div class="news-block h-100 project-bg" data-aos="fade-up" style="background-image: url({{ asset('images/projects.png') }})">
                        <div class="text-center" style="height:88px;">
                        <img class="px-5 pt-4" style="max-height: 88px; max-width: 100%;" src="{{asset('storage/'.$project->logo)}}" alt="">
                        </div>
                        <div class="p-3">
                            <p class="news-title pt-3">
                                {{ $project->title }}
                            </p>
                            <p class="news-desc">
                                {{ $project->mini_desc }}
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                    @endforeach

            </div>
        </div>
    </div>

@endsection