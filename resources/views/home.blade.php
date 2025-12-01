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
                    <div class="col-lg-5 text-lg-end">
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
                <div class="years d-flex justify-content-between mt-100">
                    <h5 class="year fsz-30"> 2020 </h5>
                    <h5 class="year fsz-30"> 2024 </h5>
                </div>
            </div>
        </div>
        <h2 class="lg-title"> Interior E-Design </h2>
    </header>
    <!--  End header  -->


    <!--  Start about  -->
    <section id="about" class="tc-about-st1">
        <div class="container-fluid">
            <div class="about-card">
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
                            <div class="section-head-st1 mb-30 js-splittext-lines">
                                <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="{{ asset('assets/img/fav_gold.svg') }}" alt=""> </span> About Us </h6>
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
        <img src="{{ asset('assets/img/line1.svg') }}" alt="" class="line wow">
    </section>
    <!--  End about  -->


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

    <!--  Start process  -->
    <section id="process" class="tc-process-st1">
        <div class="container">
            <div class="section-head-st2 text-center col-lg-9 mx-auto mb-60 js-splittext-lines">
                <div class="sub-title d-inline-block py-1 px-4 rounded-pill border brd-light text-uppercase mb-30"> Our Process </div>
                <h2 class="fsz-90 lh-2"> A Simple Path to Your Dream Space </h2>
            </div>
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

    <!--  Start portfolio  -->
    <section id="what-to-expect" class="tc-portfolio-st1">
        <div class="container">
            <div class="section-head-st1 mb-60 col-lg-6 js-splittext-lines">
                <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="{{ asset('assets/img/fav_gold.svg') }}" alt=""> </span> What To Expect </h6>
                <h2 class="fsz-50"> From Concept to Reality </h2>
            </div>
            <div class="portfolio-slider float-cursor-container wow fadeInUp slow" data-wow-delay="0.1s">
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
            </div>
            <div class="swiper-progress"> <span class="swiper-progress-bar"></span> </div>
            <div class="numbers-pagination sub-font"></div>
        </div>
    </section>
    <!--  End portfolio  -->


    <!--  Start contact  -->
    <section id="contact" class="tc-contact-st1">
        <div class="container">
            <div class="title-wrapper col-lg-9 mx-auto text-center js-splittext-lines">
                <div class="fsz-24 text-uppercase cr-gold1 ltspc-2 mb-10"> Have a project in mind? </div>
                <h2 class="fsz-100 text-capitalize lh-1"> Let's Create Your Dream Space </h2>
                <a href="{{ route('contact') }}" class="butn bg-gold1 rounded-pill mt-50 fsz-16 hover-bg-white"> Contact Us <i class="fas fa-arrow-right ms-2"></i> </a>
            </div>
            <div class="main-img">
                <img src="{{ asset('assets/img/contact.png') }}" alt="" class="img-contain">
            </div>
        </div>
    </section>
    <!--  End contact  -->
@endsection
