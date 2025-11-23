@extends('layouts.app')

@section('title', 'Client Questionnaire - ISHA Interior E-Design Studio')

@section('content')
<header class="tc-inner-header-style1">
    <div class="container">
        <div class="section-head-st1">
            <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="{{ asset('assets/img/fav_gold.svg') }}" alt=""> </span> Client Questionnaire </h6>
            <h2 class="fsz-50">Tell Us About Your Project</h2>
        </div>
    </div>
    <img src="{{ asset('assets/img/header_shaps.png') }}" alt="" class="header_shaps">
</header>
<section class="tc-contact-form-st1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="{{ route('questionnaire.submit') }}" method="POST" class="form">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="form-group mb-4">
                        <h4 class="fsz-30 mb-4">Contact Information</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                     <div class="form-group mb-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                     <div class="form-group mb-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address">
                            </div>
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Age">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <h4 class="fsz-30 mb-4">Project Information</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">What is the square footage of the space?</label>
                                <input type="text" name="sq_footage" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Residential or Commercial?</label>
                                <select name="project_type" class="form-select">
                                    <option value="residential">Residential</option>
                                    <option value="commercial">Commercial</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="row">
                             <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Have you established a budget?</label>
                                <input type="text" name="budget" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">How did you hear about me?</label>
                                <input type="text" name="how_did_you_hear" class="form-control">
                            </div>
                        </div>
                    </div>

                     <div class="form-group mb-4">
                        <h4 class="fsz-30 mb-4">Style Preference</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="fsz-16 mb-2">Which style of design is your favorite?</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="style[]" value="modern">
                                        <label class="form-check-label">Modern</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="style[]" value="minimalist">
                                        <label class="form-check-label">Minimalist</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="style[]" value="industrial">
                                        <label class="form-check-label">Industrial</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="style[]" value="mid-century-modern">
                                        <label class="form-check-label">Mid-Century Modern</label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="style[]" value="scandinavian">
                                        <label class="form-check-label">Scandinavian</label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="style[]" value="bohemian">
                                        <label class="form-check-label">Bohemian</label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="style[]" value="traditional-classical">
                                        <label class="form-check-label">Traditional / Classical</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group text-center">
                        <button type="submit" class="butn bg-gold1 rounded-pill mt-4 fsz-16 hover-bg-white">Submit Questionnaire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
