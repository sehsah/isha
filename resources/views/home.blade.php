@extends('layouts.app')

@section('title', 'ISHA Interior E-Design Studio - Home')

@section('content')
    <!--  Start header  -->
    <header id="home" class="tc-header-st1 bg-img" data-background="{{ asset('assets/img/hero.jpeg') }}">
        <div class="container">
            <div class="content">
                <p class="title_desc"> At ISHA Interior Design Studio, we believe that interior design is the art of harmonizing beauty with purpose. Our mission is to craft refined spaces where functionality meets personal expression – each design telling a unique story, embodying a vision, and enriching the lives of those who experience it.</p>
                <div class="info-card">
                    <div class="cont">
                        <a href="{{ route('register') }}" >
                            <h6 class="fsz-24 mb-1 p-3">  Lets start your interior design journey </h6>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-between">
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
