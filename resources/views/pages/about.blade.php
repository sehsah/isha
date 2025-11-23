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
<section class="tc-about-st1">
    <div class="container">
        <div class="about-card" style="margin-top: 0px;">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="img">
                        <img src="../assets/img/about1.jpg" alt="" class="img-cover">
                        <div class="float-img img-h-w" data-speed="1" data-lag="0.7">
                            <img src="../assets/img/ab_icon.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="info">
                        <div class="section-head-st1 mb-30 js-splittext-lines">
                            <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="../assets/img/fav_gold.svg" alt=""> </span> About Us </h6>
                            <h2 class="fsz-50"> Design That Inspires and Elevates </h2>
                        </div>
                        <div class="text fsz-14 cr-999"> 
                            At ISHA Interior E-Design Studio, we believe that interior design is more than just arranging furniture or picking out paint colors. It's about creating a harmonious blend of aesthetics and functionality, where every element serves a purpose and every detail enhances the experience of living or working in the space. We see each project as a unique opportunity to tell a story, express a vision, and enrich the lives of those who use the space.
                        </div>
                        <div class="progress-wrapper pt-20">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="content-card wow fadeInUp slow" data-wow-delay="0.1s">
                                        <h5 class="fsz-24 mb-15">Our Values</h5>
                                        <p class="fsz-16 cr-999"><strong>Innovation and Originality:</strong> We thrive on innovation and originality. Each project is a blank canvas where we bring together artistic vision and functional design to create spaces that are as unique as the people who inhabit them.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="content-card wow fadeInUp slow" data-wow-delay="0.2s">
                                         <h5 class="fsz-24 mb-15">&nbsp;</h5>
                                        <p class="fsz-16 cr-999"><strong>Honesty and Transparency:</strong> Honesty and transparency are the foundation of our business. We believe in building trust through ethical practices. You can count on us to provide honest advice, and to deliver on our promises without compromise.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="../assets/img/line1.svg" alt="" class="line wow">
</section>
@endsection
