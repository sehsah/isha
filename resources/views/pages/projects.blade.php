@extends('layouts.app')

@section('title', 'Projects - ISHA Interior E-Design Studio')

@section('content')
<header class="tc-inner-header-style1">
    <div class="container">
        <div class="section-head-st1">
            <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="assets/img/fav_gold.svg" alt=""> </span> Our Projects </h6>
            <h2 class="fsz-50"> A Showcase of Our Work </h2>
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
                                    <h2 class="fsz-50"> {{ $project['title'] }} </h2>
                                    <p class="fsz-16"> {{ $project['description'] }} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Swiper Arrows -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper-progress"> <span class="swiper-progress-bar"></span> </div>
            <div class="numbers-pagination sub-font"></div>
        </div>
    </section>
    <!--  End portfolio  -->
@endsection
