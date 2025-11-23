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

                    <h4 class="fsz-30 mb-4">Contact Information</h4>
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

                    <h4 class="fsz-30 my-4">Project Information</h4>
                    <div class="form-group mb-3">
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
                    <div class="form-group mb-3">
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
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Have you worked with an Interior Designer before?</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="worked_with_designer" id="worked_with_designer_yes" value="yes">
                                <label class="form-check-label" for="worked_with_designer_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="worked_with_designer" id="worked_with_designer_no" value="no">
                                <label class="form-check-label" for="worked_with_designer_no">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Is there anything special to consider during the design process?</label>
                        <textarea name="special_considerations" class="form-control" rows="4"></textarea>
                    </div>

                    <h4 class="fsz-30 my-4">Project Planner</h4>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Project Budget?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="project_budget[]" value="1k-10k"><label class="form-check-label">$1,000 - $10,000</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="project_budget[]" value="10k-30k"><label class="form-check-label">$10,000 - $30,000</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="project_budget[]" value="30k-50k"><label class="form-check-label">$30,000 - $50,000</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="project_budget[]" value="50k+"><label class="form-check-label">+ $50,000</label></div>
                        </div>
                    </div>
                     <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Involvement in the process?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="involvement[]" value="very_involved"><label class="form-check-label">I want to be very involved</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="involvement[]" value="separate_seating"><label class="form-check-label">Separate seating area</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="involvement[]" value="leave_to_professional"><label class="form-check-label">Leave it to the professional</label></div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Project Timeframe?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="timeframe[]" value="1-2m"><label class="form-check-label">1-2 months</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="timeframe[]" value="2-4m"><label class="form-check-label">2-4 months</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="timeframe[]" value="4-6m"><label class="form-check-label">4-6 months</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="timeframe[]" value="6m+"><label class="form-check-label">+ 6 months</label></div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Construction Time?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="construction_time[]" value="all_at_once"><label class="form-check-label">Constructed all at once</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="construction_time[]" value="in_stages"><label class="form-check-label">Constructed in stages</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="construction_time[]" value="decide_later"><label class="form-check-label">Will decide later based on design</label></div>
                        </div>
                    </div>

                    <h4 class="fsz-30 my-4">Additional Project Details</h4>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">What type of services are you interested in?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="e-design"><label class="form-check-label">E-Design</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="full-design"><label class="form-check-label">Full Design</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="concepts"><label class="form-check-label">Concepts</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="floorplans"><label class="form-check-label">Only Floorplans</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="renovations"><label class="form-check-label">Renovations</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="new-build"><label class="form-check-label">New Home Build</label></div>
                            <input type="text" name="services_other" class="form-control mt-2" placeholder="Other">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Which room will we be working in?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="room[]" value="kitchen"><label class="form-check-label">Kitchen</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="room[]" value="living"><label class="form-check-label">Living</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="room[]" value="bedroom"><label class="form-check-label">Bedroom</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="room[]" value="bathroom"><label class="form-check-label">Bathroom</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="room[]" value="all"><label class="form-check-label">All</label></div>
                            <input type="text" name="room_other" class="form-control mt-2" placeholder="Other">
                        </div>
                    </div>
                     <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">What is your goal with this project?</label>
                        <textarea name="project_goal" class="form-control" rows="3"></textarea>
                    </div>
                     <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Link to inspiration images (Pinterest, Instagram, Google, etc):</label>
                        <textarea name="inspiration_links" class="form-control" rows="3"></textarea>
                    </div>

                    <h4 class="fsz-30 my-4">Style Preference</h4>
                     <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Which style of design is your favorite?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="design_style[]" value="modern"><label class="form-check-label">Modern</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="design_style[]" value="minimalist"><label class="form-check-label">Minimalist</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="design_style[]" value="industrial"><label class="form-check-label">Industrial</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="design_style[]" value="mid-century"><label class="form-check-label">Mid-Century Modern</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="design_style[]" value="scandinavian"><label class="form-check-label">Scandinavian</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="design_style[]" value="bohemian"><label class="form-check-label">Bohemian</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="design_style[]" value="traditional"><label class="form-check-label">Traditional / Classical</label></div>
                            <input type="text" name="design_style_other" class="form-control mt-2" placeholder="Other">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Which flooring types are your favorites?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring[]" value="laminate"><label class="form-check-label">Laminate</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring[]" value="hardwood"><label class="form-check-label">Hardwood/Timber</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring[]" value="tiles"><label class="form-check-label">Tiles</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring[]" value="concrete"><label class="form-check-label">Concrete</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring[]" value="vinyl"><label class="form-check-label">Vinyl</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring[]" value="carpet"><label class="form-check-label">Carpet</label></div>
                            <input type="text" name="flooring_other" class="form-control mt-2" placeholder="Other">
                        </div>
                    </div>
                     <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Which kinds of window coverings are your favorites?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="window_coverings[]" value="blackout"><label class="form-check-label">Blackout Curtains</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="window_coverings[]" value="sheer"><label class="form-check-label">Sheer Curtains</label></div>
                            <input type="text" name="window_coverings_other" class="form-control mt-2" placeholder="Other">
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