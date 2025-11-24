@extends('layouts.app')

@section('title', 'ISHA Interior E-Design Studio - Home')

@section('content')
    <!--  Start header  -->
    <header id="home" class="tc-header-st1 bg-img" data-background="{{ asset('img/hero.jpg') }}">
        <div class="container">
            <div class="content">
                <h1 class="title"> ISHA Interior E-Design Studio </h1>
                <div class="info-card">
                    <div class="img icon-80 rounded-circle overflow-hidden me-20 shrink-0">
                        <img src="{{ asset('img/hero1.jpg') }}" alt="" class="img-cover">
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
                            <div class="icon"> <img src="{{ asset('img/fav_wh.svg') }}" alt=""> </div>
                        </div>
                    </div>
                    <div class="col-lg-5 text-lg-end">
                        <div class="txt-img-box d-inline-flex align-items-center mt-40">
                            <div class="img icon-200 rounded-circle overflow-hidden me-20 flex-shrink-0">
                                <img src="{{ asset('img/hero2.png') }}" alt="" class="img-cover">
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
                            <img src="{{ asset('img/about1.jpg') }}" alt="" class="img-cover">
                            <div class="float-img img-h-w" data-speed="1" data-lag="0.7">
                                <img src="{{ asset('img/ab_icon.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="info">
                            <div class="section-head-st1 mb-30 js-splittext-lines">
                                <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="{{ asset('img/fav_gold.svg') }}" alt=""> </span> About Us </h6>
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
        <img src="{{ asset('img/line1.svg') }}" alt="" class="line wow">
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
                        <img src="{{ asset('img/service-1.jpg') }}" alt="" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="info ps-lg-5 ms-lg-5 pb-120">
                        <div class="lg-txt split-txt"> Services </div>
                        <div class="service-cards wow fadeInUp slow" data-wow-delay="0.1s">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="{{ asset('img/ser1.svg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <h5 class="fsz-30 mb-15"> Convenience </h5>
                                    <div class="text fsz-16 cr-999"> Work with our designers from the comfort of your home. No need to worry about scheduling in-person meetings. </div>
                                </div>
                            </div>
                            <div class="service-card">
                                <div class="icon">
                                    <img src="{{ asset('img/ser2.svg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <h5 class="fsz-30 mb-15"> Affordability </h5>
                                    <div class="text fsz-16 cr-999"> We offer cost-effective and affordable packages tailored to fit different budgets. </div>
                                </div>
                            </div>
                            <div class="service-card">
                                <div class="icon">
                                    <img src="{{ asset('img/ser3.svg') }}" alt="">
                                </div>
                                <div class="cont">
                                    <h5 class="fsz-30 mb-15"> Flexibility </h5>
                                    <div class="text fsz-16 cr-999"> Our virtual communication process allows you to share ideas and provide feedback anytime, making the design process easier. </div>
                                </div>
                            </div>
                            <div class="service-card">
                                <div class="icon">
                                    <img src="{{ asset('img/ser3.svg') }}" alt="">
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
                <div class="col-lg-3">
                    <div class="process-card wow fadeInUp slow" data-wow-delay="0.1s">
                        <div class="icon"><span class="fsz-30">01</span></div>
                        <h5 class="fsz-24 mb-15">Share Your Vision</h5>
                        <p class="fsz-16 cr-999">Upload your floorplan and full details, or request in-home measurements.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="process-card wow fadeInUp slow" data-wow-delay="0.2s">
                        <div class="icon"><span class="fsz-30">02</span></div>
                        <h5 class="fsz-24 mb-15">Tell Us More</h5>
                        <p class="fsz-16 cr-999">Answer our questionnaire to provide us with more insight into your style and needs.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="process-card wow fadeInUp slow" data-wow-delay="0.3s">
                        <div class="icon"><span class="fsz-30">03</span></div>
                        <h5 class="fsz-24 mb-15">Design Concept</h5>
                        <p class="fsz-16 cr-999">Receive your initial design concept, including mood boards, color palettes, and floor plans.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="process-card wow fadeInUp slow" data-wow-delay="0.4s">
                        <div class="icon"><span class="fsz-30">04</span></div>
                        <h5 class="fsz-24 mb-15">Final Package</h5>
                        <p class="fsz-16 cr-999">Receive the final package with detailed documents to implement the design.</p>
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
                <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="{{ asset('img/fav_gold.svg') }}" alt=""> </span> What To Expect </h6>
                <h2 class="fsz-50"> From Concept to Reality </h2>
            </div>
            <div class="portfolio-slider float-cursor-container wow fadeInUp slow" data-wow-delay="0.1s">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="portfolio-card">
                            <div class="img">
                                <img src="{{ asset('img/1.jpg') }}" alt="" class="img-cover">
                            </div>
                            <div class="info-card">
                                <span class="tag"> Step 1 </span>
                                <h2 class="fsz-50"> Detailed Initial Concepts </h2>
                                <p class="fsz-16">Mood boards, concept boards, colour palettes, and floor plans to scale. Once all is approved, we'll move on to the next step.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="portfolio-card">
                            <div class="img">
                                <img src="{{ asset('img/2.jpg') }}" alt="" class="img-cover">
                            </div>
                            <div class="info-card">
                                <span class="tag"> Step 2 </span>
                                <h2 class="fsz-50"> The Final Package </h2>
                                <p class="fsz-16">Detailed technical documents including furniture placements, material selections, lighting plans, rendered visuals, a shopping list with links, and a contractors list.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="portfolio-card">
                            <div class="img">
                                <img src="{{ asset('img/1.jpg') }}" alt="" class="img-cover">
                            </div>
                            <div class="info-card">
                                <span class="tag"> Step 3 </span>
                                <h2 class="fsz-50"> Implementation </h2>
                                <p class="fsz-16">Contactors and suppliers will have the full details to implement the design, bringing your new space to life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-st1"></div>
                <div class="float-cursor"> Hold And Drag </div>
            </div>
            <div class="swiper-progress"> <span class="swiper-progress-bar"></span> </div>
            <div class="numbers-pagination sub-font"></div>
        </div>
    </section>
    <!--  End portfolio  -->


    <!--  Start faq  -->
    <section id="faq" class="tc-testimonials-st1">
        <div class="container">
            <div class="slider-content col-lg-8 mx-auto">
                <div class="lg-title txt-stroke-wh fsz-100 op-1 mb-30 js-splittext-lines"> Frequently Asked Questions </div>
                <div class="testimonials-slider wow fadeInUp slow" data-wow-delay="0.1s">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="user-info mb-30 d-flex align-items-center">
                                    <img src="{{ asset('img/qt.svg') }}" alt="" class="qt th-40 me-80">
                                    <span class="txt fsz-16 text-uppercase"> What are the payment terms and methods? </span>
                                </div>
                                <div class="main-txt cr-999 sub-font">
                                    <div class="text fsz-30 mb-20 lh-3"> We offer flexible payment terms structured around project milestones. Accepted payment methods include credit/debit cards, and online payments. </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="user-info mb-30 d-flex align-items-center">
                                    <img src="{{ asset('img/qt.svg') }}" alt="" class="qt th-40 me-80">
                                    <span class="txt fsz-16 text-uppercase"> How long will the design process take? </span>
                                </div>
                                <div class="main-txt cr-999 sub-font">
                                    <div class="text fsz-30 mb-20 lh-3"> The timeline for each project varies depending on its size and complexity. Our welcome guide provides estimated timelines for each phase of the project. </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="user-info mb-30 d-flex align-items-center">
                                    <img src="{{ asset('img/qt.svg') }}" alt="" class="qt th-40 me-80">
                                    <span class="txt fsz-16 text-uppercase"> What if I need to make changes during the project? </span>
                                </div>
                                <div class="main-txt cr-999 sub-font">
                                    <div class="text fsz-30 mb-20 lh-3"> Changes are a natural part of the design process. We strive to accommodate changes while keeping the project on schedule and within budget. </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="user-info mb-30 d-flex align-items-center">
                                    <img src="{{ asset('img/qt.svg') }}" alt="" class="qt th-40 me-80">
                                    <span class="txt fsz-16 text-uppercase"> How do you handle procurement and installation? </span>
                                </div>
                                <div class="main-txt cr-999 sub-font">
                                    <div class="text fsz-30 mb-20 lh-3"> We manage all aspects of procurement and installation, ensuring a seamless process and taking the stress off your shoulders. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-st1 position-relative mt-30 text-start"></div>
                </div>
            </div>
        </div>
    </section>
    <!--  End faq  -->


    <!--  Start instagram  -->
    <section class="tc-instagram-st1">
        <div class="container">
            <div class="cards float-cursor-container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <a href="#" class="img wow fadeInUp slow" data-wow-delay="0.1s">
                            <img src="{{ asset('img/insta/1.jpg') }}" alt="" class="img-cover wow clippy-img">
                        </a>
                    </div>
                    <div class="col-lg-3 col-6">
                        <a href="#" class="img wow fadeInUp slow" data-wow-delay="0.2s">
                            <img src="{{ asset('img/insta/2.jpg') }}" alt="" class="img-cover wow clippy-img">
                        </a>
                    </div>
                    <div class="col-lg-3 col-6">
                        <a href="#" class="img wow fadeInUp slow" data-wow-delay="0.3s">
                            <img src="{{ asset('img/insta/3.jpg') }}" alt="" class="img-cover wow clippy-img">
                        </a>
                    </div>
                    <div class="col-lg-3 col-6">
                        <a href="#" class="img wow fadeInUp slow" data-wow-delay="0.4s">
                            <img src="{{ asset('img/insta/4.jpg') }}" alt="" class="img-cover wow clippy-img">
                        </a>
                    </div>
                </div>
                <div class="float-cursor"> <div class="cont"> <span class="icon d-block fsz-20 mb-2"> <i class="fab fa-instagram"></i> </span> <span class="txt"> instagram </span> </div> </div>
            </div>
        </div>
    </section>
    <!--  End instagram  -->


    <!--  Start contact  -->
    <section id="contact" class="tc-contact-st1">
        <div class="container">
            <div class="title-wrapper col-lg-9 mx-auto text-center js-splittext-lines">
                <div class="fsz-24 text-uppercase cr-gold1 ltspc-2 mb-10"> Have a project in mind? </div>
                <h2 class="fsz-100 text-capitalize lh-1"> Let's Create Your Dream Space </h2>
                <a href="{{ route('contact') }}" class="butn bg-gold1 rounded-pill mt-50 fsz-16 hover-bg-white"> Contact Us <i class="fas fa-arrow-right ms-2"></i> </a>
            </div>
            <div class="main-img">
                <img src="{{ asset('img/contact.png') }}" alt="" class="img-contain">
            </div>
        </div>
    </section>
    <!--  End contact  -->
@endsection
