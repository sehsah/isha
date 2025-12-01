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
    <section id="services" class="tc-services-st1">
        <div class="container">
            <div class="section-head-st2 text-center col-lg-9 mx-auto mb-60 js-splittext-lines">
                <div class="sub-title d-inline-block py-1 px-4 rounded-pill border brd-light text-uppercase mb-30"> Why Choose E-Design? </div>
                <h2 class="fsz-90 lh-2"> A Modern Approach to Interior Design </h2>
            </div>
        </div>
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
                        <div class="service-cards wow fadeInUp slow" data-wow-delay="0.1s">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/ser1.svg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <h5 class="fsz-30 mb-15"> Convenience </h5>
                                    <div class="text fsz-16 cr-999"> Work with our designers from the comfort of your home. No need to worry about scheduling in-person meetings. </div>
                                </div>
                            </div>
                            <div class="service-card">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/ser2.svg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <h5 class="fsz-30 mb-15"> Affordability </h5>
                                    <div class="text fsz-16 cr-999"> We offer cost-effective and affordable packages tailored to fit different budgets. </div>
                                </div>
                            </div>
                            <div class="service-card">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/ser3.svg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <h5 class="fsz-30 mb-15"> Flexibility </h5>
                                    <div class="text fsz-16 cr-999"> Our virtual communication process allows you to share ideas and provide feedback anytime, making the design process easier. </div>
                                </div>
                            </div>
                            <div class="service-card">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/ser3.svg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <h5 class="fsz-30 mb-15"> Advanced Technology </h5>
                                    <div class="text fsz-16 cr-999"> We use advanced software to create accurate 2D floor plans and 3D renderings, giving you a realistic visual representation of the final design. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End services  -->
@endsection

