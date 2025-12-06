@extends('layouts.app')

@section('title', 'Contact Us - ISHA Interior E-Design Studio')

@section('content')
<header class="tc-inner-header-style1">
    <div class="container">
        <div class="section-head-st1">
            <h6 class="fsz-20 cr-gold1 mb-15">  Get In Touch </h6>
            <h2 class="fsz-30"> Let's Create Your Dream Space </h2>
        </div>
    </div>
    <img src="assets/img/header_shaps.png" alt="" class="header_shaps">
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

                    <!-- Contact Information -->
                    <h4 class="fsz-30 my-4">Contact Information</h4>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2 text-">First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                     <div class="form-group mb-3">
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
                        <label class="fsz-16 mb-2">Message</label>
                        <textarea name="message" class="form-control" rows="5" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="butn bg-gold1 rounded-pill fsz-16"> Submit <i class="fas fa-arrow-right ms-2"></i> </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
