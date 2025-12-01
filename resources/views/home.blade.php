@extends('layouts.app')

@section('title', 'ISHA Interior E-Design Studio - Home')

@section('content')
    <!--  Start header  -->
    <header id="home" class="tc-header-st1 bg-img" data-background="{{ asset('assets/img/hero.jpg') }}">
        <div class="container">
            <div class="content">
                <h1 class="title"> ISHA Interior E-Design Studio </h1>
                <div class="info-card">
                    <div class="img icon-80 rounded-circle overflow-hidden me-20 shrink-0">
                        <img src="{{ asset('assets/img/hero1.jpg') }}" alt="" class="img-cover">
                    </div>
                    <div class="cont">
                        <h6 class="fsz-24 mb-1"> Creating a harmonious blend of aesthetics and functionality. </h6>
                        <div class="text fsz-16"> Your Vision, Our Expertise </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <div class="rotate-box" data-speed="1" data-lag="0.7">
                            <a href="#" class="rotate-circle rotate-text d-inline-block">
                                <svg class="textcircle" viewBox="0 0 500 500">
                                    <defs>
                                        <path id="textcircle"
                                            d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                        </path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#textcircle" textLength="900"> ISHA Interior E-Design Studio - Your Vision, Our Expertise </textPath>
                                    </text>
                                </svg>
                            </a>
                            <div class="icon"> <img src="{{ asset('assets/img/fav_wh.svg') }}" alt=""> </div>
                        </div>
                    </div>
                    <div class="col-lg-5 text-lg-end d-none">
                        <div class="txt-img-box d-inline-flex align-items-center mt-40">
                            <div class="img icon-200 rounded-circle overflow-hidden me-20 flex-shrink-0">
                                <img src="{{ asset('assets/img/hero2.png') }}" alt="" class="img-cover">
                            </div>
                            <div class="cont text-start">
                                <h5 class="fsz-30"> Let’s Create <br> Something Beautiful <br> Together </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="lg-title d-none"> Interior E-Design </h2>
    </header>
    <!--  End header  -->
@endsection
