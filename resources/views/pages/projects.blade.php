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
<section class="tc-portfolio-st1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="portfolio-card">
                    <div class="img">
                        <img src="../assets/img/1.jpg" alt="" class="img-cover">
                    </div>
                    <div class="info-card">
                        <span class="tag"> Architecture </span>
                        <h2 class="fsz-40"> Blending futuristic building </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="portfolio-card">
                    <div class="img">
                        <img src="../assets/img/2.jpg" alt="" class="img-cover">
                    </div>
                    <div class="info-card">
                        <span class="tag"> Architecture </span>
                        <h2 class="fsz-40"> Blending futuristic building </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="portfolio-card">
                    <div class="img">
                        <img src="../assets/img/1.jpg" alt="" class="img-cover">
                    </div>
                    <div class="info-card">
                        <span class="tag"> Architecture </span>
                        <h2 class="fsz-40"> Blending futuristic building </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
