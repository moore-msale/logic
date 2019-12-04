@extends('layouts.app')
@push('styles')
    <style>
       body
       {
           background:#F5F5F5;
           overflow-x: hidden;
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
{{--    @dd(\Illuminate\Support\Facades\Request::is('*about_us*'))--}}
    <div class="container-fluid" style="padding-top: 10%; padding-bottom: 10%; overflow-x: hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 pt-lg-0 pt-5">
                    <div class="sand-step d-lg-flex d-none align-items-center" data-aos="fade-right">
                        <a style="color: #000000;" href="/">Главная</a><img class="mx-2" src="{{ asset('images/arrow.svg') }}" alt=""><a style="color: #000000;" href="#">О компании</a>
                    </div>
            <div class="mt-4" style="max-width: 600px;">
            <h2 class="title-section open-sans font-weight-bold text-uppercase" data-aos="fade-right">
                <?php
                $title = strlen($content->title);
                ?>
                <span class="green-letter">{{ substr($content->title, 0,2)  }}</span>{!!  substr($content->title, 2,$title - 4)  !!}<span class="green-letter">{!!  substr($content->title, $title - 2,$title - 1)  !!}</span>
            </h2>
            </div>
                <div class="bg align-items-end mr-5 position-relative d-lg-flex d-none">
                    <img class="w-100" style="position: absolute; top:0%; z-index:-1;" data-aos="fade-right" src="{{ asset('storage/'.$content->story1_image) }}" alt="">
                        {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                    <p class="about-text px-lg-5 px-0" style="padding-top: 35%;" data-aos="fade-right">
                        {{ $content->story1_text }}
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
                        <img class="w-100" style="position: absolute; top:0%; z-index:-1;" data-aos="fade-right" src="{{ asset('storage/'.$content->story1_image) }}" alt="">
                        {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                        <p class="about-text px-lg-5 px-0" style="padding-top: 35%;" data-aos="fade-right">
                            {{ $content->story1_text }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-lg-block d-none">
                    <div class="bg d-flex align-items-end position-relative marginable" style="margin-top:35%;">
                        <img class="w-100" style="position: absolute; top:0%; z-index: -1;" data-aos="fade-right" src="{{ asset('storage/'.$content->story3_image) }}" alt="">
                            {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                            <p class="about-text px-lg-5 px-0" style="padding-top: 35%" data-aos="fade-right">
                                {{ $content->story3_text }}
                            </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="bg d-flex align-items-end position-relative">
                        <img class="w-100" style="position: absolute; top:0%; z-index: -1;" data-aos="fade-left" src="{{ asset('storage/'.$content->story2_image) }}" alt="">
                        {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                        <p class="about-text px-lg-5 px-0" style="padding-top: 35%" data-aos="fade-left">
                            {{ $content->story2_text }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-lg-none d-block">
                    <div class="bg d-flex align-items-end position-relative marginable" style="margin-top:35%;">
                        <img class="w-100" style="position: absolute; top:0%; z-index: -1;" data-aos="fade-right" src="{{ asset('storage/'.$content->story3_image) }}" alt="">
                        {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                        <p class="about-text px-lg-5 px-0" style="padding-top: 35%" data-aos="fade-right">
                            {{ $content->story3_text }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12 d-lg-block d-none">
                    <div class="d-flex align-items-end position-relative marginable" style="margin-top: 35%;">
                        <img class="w-100" style="position: absolute; top:0%; z-index: -1;" data-aos="fade-right" src="{{ asset('storage/'.$content->story5_image) }}" alt="">

                        <p class="about-text px-lg-5 px-0" style="padding-top: 35%;" data-aos="fade-right">
                            {{ $content->story5_text }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="bg d-flex align-items-end position-relative">
                        <img class="w-100" style="position: absolute; top:0%; z-index: -1;" data-aos="fade-left" src="{{ asset('storage/'.$content->story4_image) }}" alt="">
                        {{--<img class="img-fluid" src="{{ asset('images/zig-zag.png') }}" alt="">--}}
                        <p class="about-text px-lg-5" style="padding-top: 35%" data-aos="fade-left">
                            {{ $content->story4_text }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-lg-none d-block">
                    <div class="d-flex align-items-end position-relative marginable" style="margin-top: 35%;">
                        <img class="w-100" style="position: absolute; top:0%; z-index: -1;" data-aos="fade-right" src="{{ asset('storage/'.$content->story5_image) }}" alt="">

                        <p class="about-text px-lg-5 px-0" style="padding-top: 35%;" data-aos="fade-right">
                            {{ $content->story5_text }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background:white; overflow-x: hidden; overflow-y: hidden;">
        <div class="container" style="padding:7% 0%;">
            <div class="row" style="padding-bottom: 15%;">
                <div class="d-lg-none d-block col-12">
                    <p class="title-section font-weight-bold text-center py-3">
                        {{ $content->script }}
                    </p>
                    <div class="row pb-5">
                        <div class="col-6 text-center">
                            <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('storage/'.$content->partner_1) }}" alt="">
                        </div>
                        <div class="col-6 text-center">
                            <img data-aos="fade-left" style="max-width:100%;" src="{{ asset('storage/'.$content->partner_2) }}" alt="">
                        </div>
                        <div class="col-6 text-center">
                            <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('storage/'.$content->partner_3) }}" alt="">
                        </div>
                        <div class="col-6 text-center">
                            <img data-aos="fade-left" style="max-width:100%;" src="{{ asset('storage/'.$content->partner_4) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-6 text-right d-lg-block d-none">
                    <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('storage/'.$content->partner_1) }}" alt="">
                    <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('storage/'.$content->partner_2) }}" alt="">
                    <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('storage/'.$content->partner_3) }}" alt="">
                    <img data-aos="fade-right" style="max-width:100%;" src="{{ asset('storage/'.$content->partner_4) }}" alt="">
                </div>
                <div class="col-lg-6 col-12">
                    <p data-aos="fade-down" class="about-text">
                        {!! $content->desc !!}
                    </p>
                </div>
                <div class="col-4 d-lg-block d-none" data-aos="fade-left">
                    <p class="rotate-text">
                        {{ $content->script }}
                    </p>
                </div>
            </div>
            <div class="row" style="padding-bottom:10%;">
                <div class="col-6 position-relative d-lg-block d-none" style="background-color: #F5F5F5;">
                    <img class="position-absolute w-75" data-aos="fade-right" style="top:-35%; right:0%;" src="{{ asset('images/sotrudniki.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-12 pl-lg-5 pl-3">
                    <h3 class="logic-text text-uppercase" data-aos="fade-left">
                        {{ $content->title2 }}
                    </h3>
                    <p class="about-text" data-aos="fade-left">
                        {{ $content->desc2 }}
                    </p>
                </div>
            </div>
            <div class="row" style="padding-bottom:7%;">
                <div class="col-lg-6 col-12 pr-lg-5 pr-0">
                    <img class="pb-lg-5 pb-3" data-aos="fade-right" src="{{ asset('storage/'.$content->plus1_image) }}" alt="">
                    <h3 class="logic-text text-uppercase" style="font-size:30px;" data-aos="fade-right">
                        {{ $content->plus1_title }}
                    </h3>
                    <p class="about-text" data-aos="fade-right">
                        {{ $content->plus1_desc }}
                    </p>
                </div>
                <div class="col-lg-6 col-12 pl-lg-5 pl-3">
                    <img class="pb-lg-5 pb-3" data-aos="fade-left" src="{{ asset('storage/'.$content->plus2_image) }}" alt="">
                    <h3 class="logic-text text-uppercase" data-aos="fade-left" style="font-size:30px;">
                        {{ $content->plus2_title }}
                    </h3>
                    <p class="about-text" data-aos="fade-left">
                        {{ $content->plus2_desc }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-12" style="padding-bottom:7%;">
                <h2 class="about_titles" data-aos="fade-right">
                    {{ $content->title3 }}
                </h2>
                </div>
                <div class="col-12"></div>
                <div class="col-lg-4 col-12">
                    <img class="pt-lg-0 pt-4" data-aos="fade-up" src="{{ asset('storage/'.$content->adv1_image) }}" alt="">
                    <h3 data-aos="fade-up" class="adv-title font-weight-bold pt-lg-5 pt-3">
                        {{ $content->adv1_title }}
                    </h3>
                    <p data-aos="fade-up" class="about-text">
                        {{ $content->adv1_desc }}
                    </p>
                </div>
                <div class="col-lg-4 col-12">
                    <img class="pt-lg-0 pt-4" data-aos="fade-up" src="{{ asset('storage/'.$content->adv2_image) }}" alt="">
                    <h3 data-aos="fade-up" class="adv-title font-weight-bold pt-lg-5 pt-3">
                        {{ $content->adv2_title }}
                    </h3>
                    <p data-aos="fade-up" class="about-text">
                        {{ $content->adv2_desc }}
                    </p>
                </div>
                <div class="col-lg-4 col-12">
                    <img class="pt-lg-0 pt-4" data-aos="fade-up" src="{{ asset('storage/'.$content->adv3_image) }}" alt="">
                    <h3 data-aos="fade-up" class="adv-title font-weight-bold pt-lg-5 pt-3">
                        {{ $content->adv3_title }}
                    </h3>
                    <p data-aos="fade-up" class="about-text">
                        {{ $content->adv3_desc }}
                    </p>
                </div>
            </div>
    </div>

</div>



@endsection