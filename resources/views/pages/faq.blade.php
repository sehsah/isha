@extends('layouts.app')

@section('content')
<header class="tc-inner-header-style1">
    <div class="container">
        <div class="section-head-st1">
            <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="assets/img/fav_gold.svg" alt=""> </span>  Frequently Asked Questions </h6>
            <h2 class="fsz-50">Find answers to common questions about our services, process, and policies.</h2>
        </div>
    </div>
    <img src="assets/img/header_shaps.png" alt="" class="header_shaps">
</header>

    <section id="faq" class="tc-testimonials-st1">
        <div class="container">
            <div class="slider-content col-lg-8 mx-auto">
                <div class="testimonials-slider wow fadeInUp slow" data-wow-delay="0.1s">
                    <div class="">
                        <div class="swiper-slide mb-4">
                            <div class="testi-card">
                                <div class="user-info mb-30 d-flex align-items-center">
                                    <img src="{{ asset('assets/img/qt.svg') }}" alt="" class="qt th-40 me-80">
                                    <span class="txt fsz-16 text-uppercase"> How involved will I be in the design process? </span>
                                </div>
                                <div class="main-txt cr-999 sub-font">
                                    <div class="text fsz-30 mb-20 lh-3"> Your involvement is crucial to ensure the final design meets your expectations. Our welcome guide outlines how we collaborate with you throughout the project, including regular updates and meetings to review progress and make decisions.</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="testi-card">
                                <div class="user-info mb-30 d-flex align-items-center">
                                    <img src="{{ asset('assets/img/qt.svg') }}" alt="" class="qt th-40 me-80">
                                    <span class="txt fsz-16 text-uppercase"> How do you handle procurement and installation? </span>
                                </div>
                                <div class="main-txt cr-999 sub-font">
                                    <div class="text fsz-30 mb-20 lh-3"> We manage all aspects of procurement and installation, ensuring a seamless process. Our guide explains how we handle purchasing, delivery, and the setup of furniture and materials, taking the stress off your shoulders and ensuring everything aligns with the design plan. </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="testi-card">
                                <div class="user-info mb-30 d-flex align-items-center">
                                    <img src="{{ asset('assets/img/qt.svg') }}" alt="" class="qt th-40 me-80">
                                    <span class="txt fsz-16 text-uppercase">How long will the design process take? </span>
                                </div>
                                <div class="main-txt cr-999 sub-font">
                                    <div class="text fsz-30 mb-20 lh-3"> The timeline for each project varies depending on its size and complexity. Our welcome guide provides estimated timelines for each phase of the project, from initial design to the final project, helping you understand the overall duration. </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="testi-card">
                                <div class="user-info mb-30 d-flex align-items-center">
                                    <img src="{{ asset('assets/img/qt.svg') }}" alt="" class="qt th-40 me-80">
                                    <span class="txt fsz-16 text-uppercase"> What if I need to make changes during the project?</span>
                                </div>
                                <div class="main-txt cr-999 sub-font">
                                    <div class="text fsz-30 mb-20 lh-3">Changes are a natural part of the design process. The welcome guide explains our policy on revisions and additional requests. We strive to accommodate changes while keeping the project on schedule and within budget.. </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-4">
                            <div class="testi-card">
                                <div class="user-info mb-30 d-flex align-items-center">
                                    <img src="{{ asset('assets/img/qt.svg') }}" alt="" class="qt th-40 me-80">
                                    <span class="txt fsz-16 text-uppercase"> How involved will I be in the design process?</span>
                                </div>
                                <div class="main-txt cr-999 sub-font">
                                    <div class="text fsz-30 mb-20 lh-3">Your involvement is crucial to ensure the final design meets your expectations. Our welcome guide outlines how we collaborate with you throughout the project, including regular updates and meetings to review progress and make decisions.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-st1 position-relative mt-30 text-start"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
