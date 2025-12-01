@extends('layouts.app')

@section('title', 'Projects - ISHA Interior E-Design Studio')

@section('content')
<header class="tc-inner-header-style1">
    <div class="container">
        <div class="section-head-st1">
            <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="assets/img/fav_gold.svg" alt=""> </span> How To  </h6>
            <h2 class="fsz-50"> A Simple Path to Your Dream Space</h2>
        </div>
    </div>
    <img src="assets/img/header_shaps.png" alt="" class="header_shaps">
</header>


    <!--  Start process  -->
    <section id="how-to" class="tc-process-st1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="process-card wow fadeInUp slow" data-wow-delay="0.1s">
                        <div class="icon"><span class="fsz-30">01</span></div>
                        <h5 class="fsz-24 mb-15">Fill Out the Design Questionnaire</h5>
                        <p class="fsz-16 cr-999">Tell us about your space, style, needs, and vision through our detailed online form. This helps us understand your lifestyle and preferences.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-card wow fadeInUp slow" data-wow-delay="0.2s">
                        <div class="icon"><span class="fsz-30">02</span></div>
                        <h5 class="fsz-24 mb-15">Share Your Space</h5>
                        <p class="fsz-16 cr-999">Upload photos, videos, and measurements of your space. Or, if you prefer a hands-off approach, you can Request a site visit, and one of our engineers will handle the measurements for you.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="process-card wow fadeInUp slow" data-wow-delay="0.3s">
                        <div class="icon"><span class="fsz-30">03</span></div>
                        <h5 class="fsz-24 mb-15">Let Us Design</h5>
                        <p class="fsz-16 cr-999">Our designer will craft a personalized concept tailored to your space, style, and goals—blending beauty, function, and soul.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-card wow fadeInUp slow" data-wow-delay="0.4s">
                        <div class="icon"><span class="fsz-30">04</span></div>
                        <h5 class="fsz-24 mb-15">Receive Your Digital Design Package</h5>
                        <p class="fsz-16 cr-999">You’ll receive a design concept first , if approved and everything is ok, you will receive the complete e-design package delivered to your inbox, including layout plans, mood boards, furniture selections, shopping list, and styling tips..</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="process-card wow fadeInUp slow" data-wow-delay="0.5s">
                        <div class="icon"><span class="fsz-30">05</span></div>
                        <h5 class="fsz-24 mb-15">Bring It to Life</h5>
                        <p class="fsz-16 cr-999">With your design in hand, you can implement the transformation at your own pace! </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End process  -->
@endsection