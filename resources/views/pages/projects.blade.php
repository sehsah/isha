@extends('layouts.app')

@section('title', 'Projects - ISHA Interior E-Design Studio')

@section('content')
<header class="tc-inner-header-style1">
    <div class="container">
        <div class="section-head-st1">
            <h6 class="fsz-20 cr-gold1 mb-15">  Our Projects </h6>
            <h2 class="fsz-30"> A Showcase of Our Work </h2>
        </div>
    </div>
    <img src="assets/img/header_shaps.png" alt="" class="header_shaps">
</header>
    <!--  Start portfolio  -->
    <section id="what-to-expect" class="tc-portfolio-st1">
        <div class="container">
            <div class="portfolio-slider  wow fadeInUp slow" data-wow-delay="0.1s">
                <div class="swiper-wrapper">
                    @foreach ($projects as $project)
                        <div class="swiper-slide">
                            <div class="portfolio-card">
                                <div class="img">
                                    <img src="{{ asset($project['image']) }}" alt="" class="img-cover">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Swiper Arrows -->
                <div class="swiper-button-prev">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="swiper-button-next">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <div class="swiper-progress"> <span class="swiper-progress-bar"></span> </div>
            <div class="numbers-pagination sub-font"></div>
        </div>
    </section>
    <!--  End portfolio  -->
@endsection
