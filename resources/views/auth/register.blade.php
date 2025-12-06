@extends('layouts.app')

@section('content')
<header class="tc-inner-header-style1">
    <div class="container">
        <div class="section-head-st1">
            <h6 class="fsz-20 cr-gold1 mb-15">  Register </h6>
            <h2 class="fsz-30"> Create Your Account </h2>
        </div>
    </div>
    <img src="assets/img/header_shaps.png" alt="" class="header_shaps">
</header>


<section class="tc-contact-form-st1 pb-80">
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
                                <label class="fsz-16 mb-2">First Name</label>
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
                                <label class="fsz-16 mb-2">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>                            
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                     <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>                            
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="butn bg-gold1 rounded-pill fsz-16 hover-bg-white"> Submit <i class="fas fa-arrow-right ms-2"></i> </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
