@extends('layouts.app')

@section('title', 'About Us - ISHA Interior E-Design Studio')

@section('content')
<header class="tc-inner-header-style1">
    <div class="container">
        <div class="section-head-st1">
            <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="assets/img/fav_gold.svg" alt=""> </span> About Us </h6>
            <h2 class="fsz-50"> Design That Inspires and Elevates </h2>
        </div>
    </div>
    <img src="assets/img/header_shaps.png" alt="" class="header_shaps">
</header>

    <!--  Start about  -->
    <section id="about" class="tc-about-st1">
        <div class="container-fluid">
            <div class="about-card mt-0">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="img">
                            <img src="{{ asset('assets/img/about1.jpg') }}" alt="" class="img-cover">
                            <div class="float-img img-h-w" data-speed="1" data-lag="0.7">
                                <img src="{{ asset('assets/img/ab_icon.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="info">
                            <div class="text fsz-14 cr-999"> 
                                At ISHA Interior E-Design Studio, we believe that interior design is more than just arranging furniture or picking out paint colors. It's about creating a harmonious blend of aesthetics and functionality, where every element serves a purpose and every detail enhances the experience of living or working in the space. We see each project as a unique opportunity to tell a story, express a vision, and enrich the lives of those who use the space.
                            </div>
                            <div class="progress-wrapper pt-20">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-card wow fadeInUp slow" data-wow-delay="0.1s">
                                            <h5 class="fsz-24 mb-15">O U R&nbsp; M I S S I O N</h5>
                                            <p class="fsz-16 cr-999">
                                                At ISHA Interior E-Design Studio, we believe that interior design is the art of harmonizing beauty with purpose. Our mission is to craft refined spaces where functionality meets personal expression – each design telling a unique story, embodying a vision, and enriching the lives of those who experience it.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="content-card wow fadeInUp slow" data-wow-delay="0.2s">
                                            <h5 class="fsz-24 mb-15">O U R&nbsp; V I S I O N</h5>
                                            <p class="fsz-16 cr-999">
                                                To inspire people to live beautifully and intentionally. At ISHA Interior Design Studio, we envision a world where every space tells a story – blending comfort, creativity, and functionality to create environments that feel uniquely personal and deeply meaningful.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End about  -->
@endsection
