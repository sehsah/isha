@extends('layouts.app')

@section('title', 'Client Questionnaire - ISHA Interior E-Design Studio')

@section('content')
<header class="tc-inner-header-style1">
    <div class="container">
        <div class="section-head-st1">
            <h6 class="fsz-20 cr-gold1 mb-15"> <span class="icon-20 me-1"> <img src="{{ asset('img/fav_gold.svg') }}" alt=""> </span> Client Questionnaire </h6>
            <h2 class="fsz-30">Tell Us About Your Project</h2>
        </div>
    </div>
    <img src="{{ asset('img/header_shaps.png') }}" alt="" class="header_shaps">
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
                                <label class="fsz-16 mb-2">First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                     <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
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

                    <!-- Project Information -->
                    <h4 class="fsz-30 my-4">Project Information</h4>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">What is the square footage of the space?</label>
                                <input type="text" name="sq_footage" class="form-control" required>
                            </div>
                            <div class="col-lg-6">
                                <label class="fsz-16 mb-2">Residential or Commercial?</label>
                                <select name="project_type" class="form-select" required>
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
                                <input type="text" name="established_budget" class="form-control">
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

                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">What type of services are you interested in?</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="e-design" id="service_e_design"><label class="form-check-label" for="service_e_design">E-Design</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="full-design" id="service_full_design"><label class="form-check-label" for="service_full_design">Full Design</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="concepts" id="service_concepts"><label class="form-check-label" for="service_concepts">Concepts</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="only-floorplans" id="service_only_floorplans"><label class="form-check-label" for="service_only_floorplans">Only Floorplans</label></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="renovations" id="service_renovations"><label class="form-check-label" for="service_renovations">Renovations</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]" value="new-home-build" id="service_new_home_build"><label class="form-check-label" for="service_new_home_build">New Home Build</label></div>
                                <input type="text" name="services_other" class="form-control mt-2" placeholder="Other Service">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Which room will we be working in?</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="working_room[]" value="kitchen" id="room_kitchen"><label class="form-check-label" for="room_kitchen">Kitchen</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="working_room[]" value="living" id="room_living"><label class="form-check-label" for="room_living">Living</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="working_room[]" value="bedroom" id="room_bedroom"><label class="form-check-label" for="room_bedroom">Bedroom</label></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="working_room[]" value="bathroom" id="room_bathroom"><label class="form-check-label" for="room_bathroom">Bathroom</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="working_room[]" value="all" id="room_all"><label class="form-check-label" for="room_all">All</label></div>
                                <input type="text" name="working_room_other" class="form-control mt-2" placeholder="Other Room">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">What is your goal with this project?</label>
                        <textarea name="project_goal" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Link to inspiration images (Pinterest, instagram, Google, etc):</label>
                        <textarea name="inspiration_links" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">What does you/your family normally do in the chosen room?</label>
                        <textarea name="room_activities" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">What are the ages and characteristics of who will be using the room?</label>
                        <textarea name="room_users_characteristics" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Any hobbies to be factored in the design?</label>
                        <textarea name="hobbies_in_design" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Any special needs?</label>
                        <textarea name="special_needs" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">What is the goal of the space?</label>
                        <textarea name="space_goal" class="form-control" rows="3"></textarea>
                    </div>

                    <!-- Project Planner -->
                    <h4 class="fsz-30 my-4">Project Planner</h4>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Project Budget?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="planner_project_budget[]" value="1k-10k" id="pb_1k_10k"><label class="form-check-label" for="pb_1k_10k">$1,000 - $10,000</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="planner_project_budget[]" value="10k-30k" id="pb_10k_30k"><label class="form-check-label" for="pb_10k_30k">$10,000 - $30,000</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="planner_project_budget[]" value="30k-50k" id="pb_30k_50k"><label class="form-check-label" for="pb_30k_50k">$30,000 - $50,000</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="planner_project_budget[]" value="50k+" id="pb_50k_plus"><label class="form-check-label" for="pb_50k_plus">+ $50,000</label></div>
                        </div>
                    </div>
                     <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Involvement in the process?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="involvement_process[]" value="very_involved" id="involve_very"><label class="form-check-label" for="involve_very">I want to be very involved</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="involvement_process[]" value="separate_seating" id="involve_seating"><label class="form-check-label" for="involve_seating">Separate seating area</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="involvement_process[]" value="leave_to_professional" id="involve_professional"><label class="form-check-label" for="involve_professional">Leave it to the professional</label></div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Project Timeframe?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="timeframe[]" value="1-2m" id="tf_1_2m"><label class="form-check-label" for="tf_1_2m">1-2 months</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="timeframe[]" value="2-4m" id="tf_2_4m"><label class="form-check-label" for="tf_2_4m">2-4 months</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="timeframe[]" value="4-6m" id="tf_4_6m"><label class="form-check-label" for="tf_4_6m">4-6 months</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="timeframe[]" value="6m+" id="tf_6m_plus"><label class="form-check-label" for="tf_6m_plus">+ 6 months</label></div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Construction Time?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="construction_time[]" value="all_at_once" id="ct_all_at_once"><label class="form-check-label" for="ct_all_at_once">Constructed all at once</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="construction_time[]" value="in_stages" id="ct_in_stages"><label class="form-check-label" for="ct_in_stages">Constructed in stages</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="construction_time[]" value="decide_later" id="ct_decide_later"><label class="form-check-label" for="ct_decide_later">Will decide later based on design</label></div>
                        </div>
                    </div>

                    <!-- Style Preference -->
                    <h4 class="fsz-30 my-4">Style Preference</h4>
                     <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Which style of design is your favorite?</label>
                        <div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="design_style[]" value="modern" id="ds_modern"><label class="form-check-label" for="ds_modern">Modern</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="design_style[]" value="minimalist" id="ds_minimalist"><label class="form-check-label" for="ds_minimalist">Minimalist</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="design_style[]" value="industrial" id="ds_industrial"><label class="form-check-label" for="ds_industrial">Industrial</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="design_style[]" value="mid-century" id="ds_mid_century"><label class="form-check-label" for="ds_mid_century">Mid-Century Modern</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="design_style[]" value="scandinavian" id="ds_scandinavian"><label class="form-check-label" for="ds_scandinavian">Scandinavian</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="design_style[]" value="bohemian" id="ds_bohemian"><label class="form-check-label" for="ds_bohemian">Bohemian</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="design_style[]" value="traditional" id="ds_traditional"><label class="form-check-label" for="ds_traditional">Traditional / Classical</label></div>
                            <input type="text" name="design_style_other" class="form-control mt-2" placeholder="Other Style">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Flooring Preference (types and choices):</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring_preference[]" value="laminate" id="fp_laminate"><label class="form-check-label" for="fp_laminate">Laminate</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring_preference[]" value="hardwood-timber" id="fp_hardwood_timber"><label class="form-check-label" for="fp_hardwood_timber">Hardwood/Timber</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring_preference[]" value="tiles" id="fp_tiles"><label class="form-check-label" for="fp_tiles">Tiles</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring_preference[]" value="concrete" id="fp_concrete"><label class="form-check-label" for="fp_concrete">Concrete</label></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring_preference[]" value="vinyl" id="fp_vinyl"><label class="form-check-label" for="fp_vinyl">Vinyl</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring_preference[]" value="carpet" id="fp_carpet"><label class="form-check-label" for="fp_carpet">Carpet</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="flooring_preference[]" value="any" id="fp_any"><label class="form-check-label" for="fp_any">Any (from Flooring Choice)</label></div>
                                <input type="text" name="flooring_preference_other" class="form-control mt-2" placeholder="Other Flooring">
                            </div>
                        </div>
                    </div>
                     <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Which kinds of window coverings are your favorites?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="window_coverings[]" value="blackout" id="wc_blackout"><label class="form-check-label" for="wc_blackout">Blackout Curtains</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="window_coverings[]" value="sheer" id="wc_sheer"><label class="form-check-label" for="wc_sheer">Sheer Curtains</label></div>
                            <input type="text" name="window_coverings_other" class="form-control mt-2" placeholder="Other Window Covering">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">What color palette do you prefer?</label>
                        <div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="color_palette[]" value="neutral" id="cp_neutral"><label class="form-check-label" for="cp_neutral">Neutral tones</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="color_palette[]" value="warm" id="cp_warm"><label class="form-check-label" for="cp_warm">Warm tones</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="color_palette[]" value="cool" id="cp_cool"><label class="form-check-label" for="cp_cool">Cool tones</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="color_palette[]" value="bold_vibrant" id="cp_bold"><label class="form-check-label" for="cp_bold">Bold and vibrant colors</label></div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Decorative elements?</label>
                        <div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="decorative_elements[]" value="wall_art" id="de_wall_art"><label class="form-check-label" for="de_wall_art">Wall art</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="decorative_elements[]" value="indoor_plants" id="de_plants"><label class="form-check-label" for="de_plants">Indoor plants</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="decorative_elements[]" value="throw_pillows" id="de_pillows"><label class="form-check-label" for="de_pillows">Throw pillows</label></div>
                            <input type="text" name="decorative_elements_other" class="form-control mt-2" placeholder="Other Decorative Elements">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Preferred seating arrangement?</label>
                        <div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="seating_arrangement[]" value="sectional" id="sa_sectional"><label class="form-check-label" for="sa_sectional">Sectional</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="seating_arrangement[]" value="armchairs" id="sa_armchairs"><label class="form-check-label" for="sa_armchairs">Armchairs</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="seating_arrangement[]" value="sofa_set" id="sa_sofa_set"><label class="form-check-label" for="sa_sofa_set">Sofa set</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="seating_arrangement[]" value="any_seating" id="sa_any"><label class="form-check-label" for="sa_any">Any</label></div>
                        </div>
                    </div>
                     <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Lighting preference?</label>
                        <div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="lighting_preference[]" value="recessed" id="lp_recessed"><label class="form-check-label" for="lp_recessed">Recessed</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="lighting_preference[]" value="floor_lamps" id="lp_floor_lamps"><label class="form-check-label" for="lp_floor_lamps">Floor lamps</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="lighting_preference[]" value="pendant_lights" id="lp_pendant_lights"><label class="form-check-label" for="lp_pendant_lights">Pendant lights</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="lighting_preference[]" value="any_lighting" id="lp_any"><label class="form-check-label" for="lp_any">Any</label></div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Furniture style?</label>
                        <div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="furniture_style[]" value="modern_minimalist" id="fs_modern"><label class="form-check-label" for="fs_modern">Modern and minimalist</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="furniture_style[]" value="traditional_classic" id="fs_traditional"><label class="form-check-label" for="fs_traditional">Traditional and classic</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="furniture_style[]" value="rustic_farmhouse" id="fs_rustic"><label class="form-check-label" for="fs_rustic">Rustic and farmhouse</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="furniture_style[]" value="coastal" id="fs_coastal"><label class="form-check-label" for="fs_coastal">Coastal</label></div>
                        </div>
                    </div>
                     <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">What color do you dislike?</label>
                        <textarea name="dislike_color" class="form-control" rows="2"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">What pattern do you dislike?</label>
                        <textarea name="dislike_pattern" class="form-control" rows="2"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Which kind of shelved do you prefer?</label>
                        <div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="shelved_type[]" value="opened" id="st_opened"><label class="form-check-label" for="st_opened">Opened</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="shelved_type[]" value="closed_storage" id="st_closed"><label class="form-check-label" for="st_closed">Closed Storage</label></div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">What mood do you want to feel?</label>
                        <div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="mood[]" value="warm" id="mood_warm"><label class="form-check-label" for="mood_warm">Warm</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="mood[]" value="cosy" id="mood_cosy"><label class="form-check-label" for="mood_cosy">Cosy</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="mood[]" value="airy" id="mood_airy"><label class="form-check-label" for="mood_airy">Airy</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="mood[]" value="glamorous" id="mood_glamorous"><label class="form-check-label" for="mood_glamorous">Glamorous</label></div>
                            <input type="text" name="mood_other" class="form-control mt-2" placeholder="Other Mood">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">In case of refurbishment, Is there any item/furniture you want to keep? (Insert Pictures)</label>
                        <textarea name="items_to_keep" class="form-control" rows="3"></textarea>
                    </div>

                    <!-- Bathroom Preference -->
                    <h4 class="fsz-30 my-4">Bathroom Preference</h4>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Which style of design is your favorite?</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bathroom_style[]" value="freestanding_bath" id="bs_freestanding"><label class="form-check-label" for="bs_freestanding">Freestanding Bath</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bathroom_style[]" value="jacuzzi_bath" id="bs_jacuzzi"><label class="form-check-label" for="bs_jacuzzi">Jacuzzi Bath</label></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bathroom_style[]" value="corner_bath" id="bs_corner"><label class="form-check-label" for="bs_corner">Corner Bath</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bathroom_style[]" value="shower_over_bath" id="bs_shower_over"><label class="form-check-label" for="bs_shower_over">Shower Over Bath</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Shower Hardware?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="shower_hardware[]" value="fixed_head_only" id="sh_fixed_only"><label class="form-check-label" for="sh_fixed_only">Fixed head only</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="shower_hardware[]" value="fixed_head_plus_handheld" id="sh_fixed_handheld"><label class="form-check-label" for="sh_fixed_handheld">Fixed head plus handheld</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="shower_hardware[]" value="handheld_only" id="sh_handheld_only"><label class="form-check-label" for="sh_handheld_only">Handheld only</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="shower_hardware[]" value="any_hardware" id="sh_any"><label class="form-check-label" for="sh_any">Any</label></div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Heating Preference?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="heating_preference[]" value="heated_towel_rail" id="hp_heated"><label class="form-check-label" for="hp_heated">Heated Towel Rail</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="heating_preference[]" value="normal_towel_rail" id="hp_normal"><label class="form-check-label" for="hp_normal">Normal Towel Rail</label></div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Tiling Preference?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="tiling_preference[]" value="large_slab" id="tp_large_slab"><label class="form-check-label" for="tp_large_slab">Large slab (minimal grout lines)</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="tiling_preference[]" value="small_subway_mosaic" id="tp_subway_mosaic"><label class="form-check-label" for="tp_subway_mosaic">Small subway / mosaic (a lot of grout lines)</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="tiling_preference[]" value="medium_size" id="tp_medium_size"><label class="form-check-label" for="tp_medium_size">Medium size (e.g. 600mm x 600mm)</label></div>
                            <input type="text" name="tiling_preference_other" class="form-control mt-2" placeholder="Other Tiling Preference">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Basin Preference?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="basin_preference[]" value="counter_basin" id="bp_counter"><label class="form-check-label" for="bp_counter">Counter Basin (sits on counter)</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="basin_preference[]" value="wall_mounted" id="bp_wall_mounted"><label class="form-check-label" for="bp_wall_mounted">Wall mounted (no storage below)</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="basin_preference[]" value="under_counter" id="bp_under_counter"><label class="form-check-label" for="bp_under_counter">Under counter (easy to clean counter)</label></div>
                            <input type="text" name="basin_preference_other" class="form-control mt-2" placeholder="Other Basin Preference">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Preference for Storing?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="storing_preference[]" value="wall_cabinet" id="sp_wall_cabinet"><label class="form-check-label" for="sp_wall_cabinet">Wall cabinet</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="storing_preference[]" value="vanity_cupboards" id="sp_vanity_cupboards"><label class="form-check-label" for="sp_vanity_cupboards">Vanity cupboards</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="storing_preference[]" value="vanity_drawer" id="sp_vanity_drawer"><label class="form-check-label" for="sp_vanity_drawer">Vanity drawer</label></div>
                            <input type="text" name="storing_preference_other" class="form-control mt-2" placeholder="Other Storing Preference">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Ventilation?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="ventilation[]" value="openable_window" id="v_openable_window"><label class="form-check-label" for="v_openable_window">Openable Window</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="ventilation[]" value="openable_skylight" id="v_openable_skylight"><label class="form-check-label" for="v_openable_skylight">Openable Skylight</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="ventilation[]" value="mechanical_ceiling_wall_exhaust" id="v_exhaust"><label class="form-check-label" for="v_exhaust">Mechanical Ceiling / Wall Exhaust</label></div>
                            <input type="text" name="ventilation_other" class="form-control mt-2" placeholder="Other Ventilation">
                        </div>
                    </div>

                    <!-- Kitchen Preference -->
                    <h4 class="fsz-30 my-4">Kitchen Preference</h4>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Which style of design is your favorite?</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="kitchen_style[]" value="classical" id="ks_classical"><label class="form-check-label" for="ks_classical">Classical</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="kitchen_style[]" value="industrial" id="ks_industrial"><label class="form-check-label" for="ks_industrial">Industrial</label></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="kitchen_style[]" value="traditional" id="ks_traditional"><label class="form-check-label" for="ks_traditional">Traditional</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="kitchen_style[]" value="modern" id="ks_modern"><label class="form-check-label" for="ks_modern">Modern</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Favorite Design for Sink?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="sink_design[]" value="double_sink" id="sd_double_sink"><label class="form-check-label" for="sd_double_sink">Double sink</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="sink_design[]" value="single_sink" id="sd_single_sink"><label class="form-check-label" for="sd_single_sink">Single sink</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="sink_design[]" value="one_and_a_half_sink" id="sd_one_half_sink"><label class="form-check-label" for="sd_one_half_sink">One and a half sink</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="sink_design[]" value="farmhouse_sink" id="sd_farmhouse_sink"><label class="form-check-label" for="sd_farmhouse_sink">Farmhouse sink</label></div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Fridge Style?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="fridge_style[]" value="side_by_side" id="fs_side_by_side"><label class="form-check-label" for="fs_side_by_side">Side by side</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="fridge_style[]" value="french_door" id="fs_french_door"><label class="form-check-label" for="fs_french_door">French door (freezer drawer on bottom)</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="fridge_style[]" value="bottom_top_mount" id="fs_bottom_top_mount"><label class="form-check-label" for="fs_bottom_top_mount">Bottom/Top Mount Freezer</label></div>
                            <input type="text" name="fridge_style_other" class="form-control mt-2" placeholder="Other Fridge Style">
                        </div>
                    </div>
                     <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Oven Preference?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="oven_preference[]" value="stacked_double_above" id="op_stacked_double"><label class="form-check-label" for="op_stacked_double">Stacked Double Oven (above bench)</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="oven_preference[]" value="single_under_bench" id="op_single_under"><label class="form-check-label" for="op_single_under">Single Oven (under bench)</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="oven_preference[]" value="oven_integrated_hob" id="op_integrated_hob"><label class="form-check-label" for="op_integrated_hob">Oven integrated with hob burner</label></div>
                            <input type="text" name="oven_preference_other" class="form-control mt-2" placeholder="Other Oven Preference">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Splashback Design?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="splashback_design[]" value="glass_slab_no_grout" id="sd_glass_slab"><label class="form-check-label" for="sd_glass_slab">Glass / slab splashback (no grout to clean)</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="splashback_design[]" value="small_subway_mosaic" id="sd_small_subway"><label class="form-check-label" for="sd_small_subway">Small subway / mosaic (a lot of grout lines)</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="splashback_design[]" value="medium_size_grout" id="sd_medium_size"><label class="form-check-label" for="sd_medium_size">Medium size (e.g. 600mm x 600mm)</label></div>
                            <input type="text" name="splashback_design_other" class="form-control mt-2" placeholder="Other Splashback Design">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Which Cooking Fuel Is Best?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="cooking_fuel[]" value="gas" id="cf_gas"><label class="form-check-label" for="cf_gas">Gas</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="cooking_fuel[]" value="electric_ceramic" id="cf_electric"><label class="form-check-label" for="cf_electric">Electric (ceramic)</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="cooking_fuel[]" value="induction" id="cf_induction"><label class="form-check-label" for="cf_induction">Induction</label></div>
                            <input type="text" name="cooking_fuel_other" class="form-control mt-2" placeholder="Other Cooking Fuel">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Optimal Seating Configuration?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="seating_configuration[]" value="breakfast_bar" id="sc_breakfast_bar"><label class="form-check-label" for="sc_breakfast_bar">Breakfast bar</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="seating_configuration[]" value="separate_seating_area" id="sc_separate_seating_area"><label class="form-check-label" for="sc_separate_seating_area">Separate seating area</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="seating_configuration[]" value="both_formal_dining_breakfast_bar" id="sc_both"><label class="form-check-label" for="sc_both">Both formal dining and breakfast bar</label></div>
                            <input type="text" name="seating_configuration_other" class="form-control mt-2" placeholder="Other Seating Configuration">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Storage Options?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="storage_options[]" value="drawers_drawers_drawers" id="so_drawers_drawers_drawers"><label class="form-check-label" for="so_drawers_drawers_drawers">Drawers, drawers, drawers</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="storage_options[]" value="cupboards_and_drawers" id="so_cupboards_drawers"><label class="form-check-label" for="so_cupboards_drawers">Cupboards and drawers</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="storage_options[]" value="drawers_and_open_shelves" id="so_drawers_open_shelves"><label class="form-check-label" for="so_drawers_open_shelves">Drawers and Open Shelves</label></div>
                            <input type="text" name="storage_options_other" class="form-control mt-2" placeholder="Other Storage Options">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Island yes or no?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="island_yn[]" value="yes_definitely" id="island_yes_definitely"><label class="form-check-label" for="island_yes_definitely">Yes, definitely</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="island_yn[]" value="hard_no" id="island_hard_no"><label class="form-check-label" for="island_hard_no">Hard no</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="island_yn[]" value="open_to_it" id="island_open_to_it"><label class="form-check-label" for="island_open_to_it">Open to it</label></div>
                            <input type="text" name="island_yn_other" class="form-control mt-2" placeholder="Other Island Preference">
                        </div>
                    </div>

                    <!-- Living Room Preference -->
                    <h4 class="fsz-30 my-4">Living Room Preference</h4>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Please describe your preferences for the living room:</label>
                        <textarea name="living_room_preference" class="form-control" rows="4"></textarea>
                    </div>

                    <!-- Bedroom Preference -->
                    <h4 class="fsz-30 my-4">Bedroom Preference</h4>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Bedding preference?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bedding_preference[]" value="duvet" id="bp_duvet"><label class="form-check-label" for="bp_duvet">Duvet</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bedding_preference[]" value="comforter" id="bp_comforter"><label class="form-check-label" for="bp_comforter">Comforter</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bedding_preference[]" value="quilt" id="bp_quilt"><label class="form-check-label" for="bp_quilt">Quilt</label></div>
                            <input type="text" name="bedding_preference_other" class="form-control mt-2" placeholder="Other Bedding Preference">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Bed size?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bed_size[]" value="king" id="bs_king"><label class="form-check-label" for="bs_king">King</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bed_size[]" value="queen" id="bs_queen"><label class="form-check-label" for="bs_queen">Queen</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bed_size[]" value="full" id="bs_full"><label class="form-check-label" for="bs_full">Full</label></div>
                            <input type="text" name="bed_size_other" class="form-control mt-2" placeholder="Other Bed Size">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Lighting preference?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bedroom_lighting_preference[]" value="overhead" id="blp_overhead"><label class="form-check-label" for="blp_overhead">Overhead</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bedroom_lighting_preference[]" value="bedside_lamps" id="blp_bedside_lamps"><label class="form-check-label" for="blp_bedside_lamps">Bedside lamps</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bedroom_lighting_preference[]" value="pendant_lights" id="blp_pendant_lights"><label class="form-check-label" for="blp_pendant_lights">Pendant lights</label></div>
                            <input type="text" name="bedroom_lighting_preference_other" class="form-control mt-2" placeholder="Other Lighting Preference">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Storage solutions?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bedroom_storage_solutions[]" value="wardrobe" id="bss_wardrobe"><label class="form-check-label" for="bss_wardrobe">Wardrobe</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bedroom_storage_solutions[]" value="dresser" id="bss_dresser"><label class="form-check-label" for="bss_dresser">Dresser</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="bedroom_storage_solutions[]" value="under_bed_storage" id="bss_under_bed_storage"><label class="form-check-label" for="bss_under_bed_storage">Under-bed storage</label></div>
                            <input type="text" name="bedroom_storage_solutions_other" class="form-control mt-2" placeholder="Other Storage Solution">
                        </div>
                    </div>

                    <!-- Furniture Preference -->
                    <h4 class="fsz-30 my-4">Furniture Preference</h4>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Where do you purchase your furnishings?</label>
                        <input type="text" name="furnishings_purchase_location" class="form-control" placeholder="e.g., Local stores, Online retailers">
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Which websites do you frequent?</label>
                        <input type="text" name="frequent_websites" class="form-control" placeholder="e.g., Wayfair, Pottery Barn, Etsy">
                    </div>
                    <div class="form-group mb-3">
                        <label class="fsz-16 mb-2">Would you like to repurpose any current pieces in your home?</label>
                        <textarea name="repurpose_pieces" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fsz-16 mb-2">Adequate amount to spend on furnishings?</label>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="furnishing_spend[]" value="budget_cost_efficient" id="fs_budget_cost_efficient"><label class="form-check-label" for="fs_budget_cost_efficient">Budget - Cost efficient</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="furnishing_spend[]" value="lower_mid_range" id="fs_lower_mid_range"><label class="form-check-label" for="fs_lower_mid_range">Lower Mid Range - Ability to spend on special items</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="furnishing_spend[]" value="higher_mid_range" id="fs_higher_mid_range"><label class="form-check-label" for="fs_higher_mid_range">Higher Mid Range - Happy to spend more for a better-quality product</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="furnishing_spend[]" value="high_end" id="fs_high_end"><label class="form-check-label" for="fs_high_end">High End - Push the budget to achieve a high-end aesthetic</label></div>
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
