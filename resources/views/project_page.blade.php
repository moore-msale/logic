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
                    <a style="color: #000000;" href="/">Главная</a><img class="mx-2" src="{{ asset('images/arrow.svg') }}" alt=""><a style="color: #000000;" href="/projects">Наши реализованные проекты</a><img class="mx-2" src="{{ asset('images/arrow.svg') }}" alt=""><a style="color: #000000;" href="#">{{$project->title}}</a>
                </div>
                <div class="mt-4 d-lg-block d-none">
                    <h2 class="title-section open-sans font-weight-bold" data-aos="fade-up">
                        {{$project->title}}
                    </h2>

                </div>
            </div>
            <div class="row justify-content-end pt-5">
                <div class="col-lg-8 col-12 position-relative" style="background-color: #F6F6F6;">
                    <div class="row justify-content-between p-lg-5 p-1">
                        <div class="col-lg-3 col-12">
                            <img class="w-75" src="{{ asset('storage/'.$project->logo) }}" alt="">
                        </div>
                        <div class="col-lg-9 col-12">
                            <h3 class="project-title font-weight-bold pb-4" data-aos="fade-up">
                                {{$project->title}}
                            </h3>
                            <p class="project-desc">
                                {!! $project->description !!}
                            </p>
                        </div>
                        <img class="position-absolute d-lg-block d-none" style="top:35%; left:-40%; width:50%; box-shadow: 10px 15px 50px rgba(0, 0, 0, 0.25);" src="{{ asset('storage/'.$project->image) }}" alt="">
                        <img class="position-absolute d-lg-block d-none" style="top:-8%; left:28%;" src="{{ asset('images/koch.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection