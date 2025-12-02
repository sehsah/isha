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


<!--  Start services  -->
<section id="services" class="tc-services-st1 tc-about-st1">
    <div class="container-fluid">
    <div class="content">
        <div class="row gx-0">
            <div class="col-lg-5">
                <div class="img wow zoomIn slow" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/img/service-1.jpg') }}" alt="" class="img-cover">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="info ps-lg-5 ms-lg-5 pb-120">
                    <div class="lg-txt split-txt"> Services </div>
                    <div class="service-cards wow fadeInUp slow mt-5" data-wow-delay="0.1s">
                        <li>Space planning and layouts.</li>
                        <li>Concept developments.</li>
                        <li>Furniture and décor selection.</li>
                        <li>Lighting plan.</li>
                        <li>Material and finishes.</li>
                        <li>Rooms Renovation.</li>
                        <li>Shopping Lists.</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--  End services  -->
@endsection

