<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template ISHA Multi-Purpose themeforest">
    <meta name="description" content="ISHA - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>ISHA Interior E-Design Studio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}" title="Favicon" sizes="16x16">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}">

    <!-- font family -->
    <link href="{{ asset('assets/fonts/google-fonts-1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/google-fonts-2.css') }}" rel="stylesheet">

    <!-- fontawesome icons  -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <!-- Replace the URL above with your Font Awesome Pro kit URL from fontawesome.com -->
    <!-- animate css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/animate.css') }}">
    <!-- fancybox popup  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/jquery.fancybox.css') }}">
    <!-- lity popup  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/lity.css') }}">
    <!-- swiper slider  -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/swiper8.min.css') }}">

    <!-- common style -->
    <link rel="stylesheet" href="{{ asset('assets/css/common_style.css') }}">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body class="home-st1 dark-theme">

    <div class="lines"><span></span><span></span><span></span><span></span><span></span></div>

    <!--  Start sidemenu  -->
    <div class="tc-sidemenu-st1">
        <div class="main-links">
            <ul>
                <li> <a href="#home" class="main-link"> Home </a> </li>
                <li><a href="#about" class="main-link"> About Us </a></li>
                <li><a href="#process" class="main-link"> Our Process </a></li>
                <li><a href="#faq" class="main-link"> FAQ </a></li>
                <li><a href="#contact" class="main-link"> Contact </a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul>
                <li> <a href="#"> Facebook </a> </li>
                <li> <a href="#"> twitter </a> </li>
                <li> <a href="#"> instagram </a> </li>
                <li> <a href="#"> Linkedin </a> </li>
            </ul>
        </div>
        <span class="white-line"></span>
        <img src="{{ asset('assets/img/contact.png') }}" alt="" class="cube img-cover">
        <span class="clss"> <i class="fas fa-times"></i> </span>
        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="logo">
    </div>
    <!--  End sidemenu  -->

    <!--  start cursor  -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!--  end cursor  -->

    <!-- ====== Start Loading ====== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>

    <div id="scrollsmoother-container" class="scrollsmoother-container">

        <!--  Start navbar  -->
        <nav class="navbar navbar-expand-lg tc-navbar-st1 navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand me-lg-5" href="#">
                    <img src="{{ asset('assets/img/logo.png') }}" width="100px" alt="" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-lg-5 ps-lg-5 me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#home" aria-expanded="false">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about" aria-expanded="false">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#process">Our Process</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <div class="nav-side d-flex align-items-center">
                        <a href="#" class="contact-item d-flex align-items-center">
                            <span class="icon fsz-30 me-20 flex-shrink-0 op-8 mt-1"> <i class="fas fa-phone"></i> </span>
                            <div class="cont">
                                <div class="text fsz-16 op-8 fw-200"> Call us Phone </div>
                                <h6 class="fsz-20 fw-300"> +44 54224 849203 </h6>
                            </div>
                        </a>
                        <a href="#" class="sidemenu-toggle menu-toggle-btn"> <i class="fas fa-bars"></i> </a>
                    </div>
                </div>
            </div>
        </nav>
        <!--  End navbar  -->

        <!--  Start header  -->
        <header id="home" class="tc-header-st1 bg-img" data-background="assets/img/hero.jpg">
            <div class="container">
                <div class="content">
                    <h1 class="title"> ISHA Interior E-Design Studio </h1>
                    <div class="info-card">
                        <div class="img icon-80 rounded-circle overflow-hidden me-20 flex-shrink-0">
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


        <!--Contents-->
        <main>

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
                        <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="{{ asset('assets/img/fav_gold.svg') }}" alt=""> </span> What To Expect </h6>
                        <h2 class="fsz-50"> From Concept to Reality </h2>
                    </div>
                    <div class="portfolio-slider float-cursor-container wow fadeInUp slow" data-wow-delay="0.1s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="portfolio-card">
                                    <div class="img">
                                        <img src="{{ asset('assets/img/1.jpg') }}" alt="" class="img-cover">
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
                                        <img src="{{ asset('assets/img/2.jpg') }}" alt="" class="img-cover">
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
                                        <img src="{{ asset('assets/img/1.jpg') }}" alt="" class="img-cover">
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
                                            <img src="{{ asset('assets/img/qt.svg') }}" alt="" class="qt th-40 me-80">
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
                                            <img src="{{ asset('assets/img/qt.svg') }}" alt="" class="qt th-40 me-80">
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
                                            <img src="{{ asset('assets/img/qt.svg') }}" alt="" class="qt th-40 me-80">
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
                                            <img src="{{ asset('assets/img/qt.svg') }}" alt="" class="qt th-40 me-80">
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
                                    <img src="{{ asset('assets/img/insta/1.jpg') }}" alt="" class="img-cover wow clippy-img">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6">
                                <a href="#" class="img wow fadeInUp slow" data-wow-delay="0.2s">
                                    <img src="{{ asset('assets/img/insta/2.jpg') }}" alt="" class="img-cover wow clippy-img">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6">
                                <a href="#" class="img wow fadeInUp slow" data-wow-delay="0.3s">
                                    <img src="{{ asset('assets/img/insta/3.jpg') }}" alt="" class="img-cover wow clippy-img">
                                </a>
                            </div>
                            <div class="col-lg-3 col-6">
                                <a href="#" class="img wow fadeInUp slow" data-wow-delay="0.4s">
                                    <img src="{{ asset('assets/img/insta/4.jpg') }}" alt="" class="img-cover wow clippy-img">
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
                        <a href="#0" class="butn bg-gold1 rounded-pill mt-50 fsz-16 hover-bg-white"> Contact Us <i class="fas fa-arrow-right ms-2"></i> </a>
                    </div>
                    <div class="main-img">
                        <img src="{{ asset('assets/img/contact.png') }}" alt="" class="img-contain">
                    </div>
                </div>
            </section>
            <!--  End contact  -->


        </main>
        <!--End-Contents-->

        <!--  Start footer  -->
        <footer class="tc-footer-st1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="foot-info">
                            <h2 class="fsz-50 fw-400"> <a href="#"> hello@isha-design.com </a> </h2>
                            <div class="text fsz-16 cr-999 text-uppercase mt-15 ltspc-2 pe-lg-5"> We build comfortable futures for our clients. </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-2">
                        <div class="contact-info">
                            <div class="item mb-30">
                                <div class="text fsz-16 cr-999 mb-1"> Our website </div>
                                <h6 class="fsz-24"> <a href="#"> www.isha-design.com </a> </h6>
                            </div>
                            <div class="item mb-30">
                                <div class="text fsz-16 cr-999 mb-1"> If you're in a hurry, give us a call </div>
                                <h6 class="fsz-24"> <a href="#"> +44 54224 849203</a> </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="adress-item">
                            <h5 class="fsz-30 fw-400 mb-1"> Brooklyn, New <br> York </h5>
                            <div class="text fsz-16 cr-999"> 962 Fifth Avenue Str, 3rd Floor-Trump Building NY 10006, United State. </div>
                        </div>
                    </div>
                </div>
                <div class="links-wrapper my-5">
                    <div class="row justify-content-between">
                        <div class="col-lg-4">
                            <div class="social-links">
                                <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                <a href="#"> <i class="fab fa-instagram"></i> </a>
                                <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="foot-links text-lg-end mt-30">
                                <a href="#about"> <span class="num"> 1 </span> <span class="txt"> About </span> </a>
                                <a href="#services"> <span class="num"> 2 </span> <span class="txt"> Services </span> </a>
                                <a href="#process"> <span class="num"> 3 </span> <span class="txt"> Process </span> </a>
                                <a href="#faq"> <span class="num"> 4 </span> <span class="txt"> FAQ </span> </a>
                                <a href="#contact"> <span class="num"> 5 </span> <span class="txt"> Contact </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot">
                <div class="container">
                    <div class="text fsz-16 cr-999 text-center"> © 2025 All rights for <a href="#" class="text-white"> ISHA Interior E-Design Studio </a> exclusive </div>
                </div>
            </div>
        </footer>
        <!--  End footer  -->


    </div>


    <!--  Start to top button  -->
    <!-- <a href="#" class="to_top" id="to_top">
        <i class="fas fa-angle-up"></i>
    </a> -->
    <!--  End to top button  -->

    <!--  request  -->
    <script src="{{ asset('assets/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/js/lib/swiper8-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.counterup.js') }}"></script>
    <script src="{{ asset('assets/js/lib/parallaxie.js') }}"></script>
    <!-- === Gsap === -->
    <script src="{{ asset('assets/js/gsap_lib/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap_lib/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap_lib/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap_lib/SplitText.min.js') }}"></script>
    <!-- === common === -->
    <script src="{{ asset('assets/js/common.js') }}"></script>

    <!-- ===== scripts ===== -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>

</html>