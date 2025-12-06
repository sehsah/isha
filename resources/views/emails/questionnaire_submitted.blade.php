
<html>
<body style="font-family: Arial, sans-serif; color: #222;">
	<h2>Client Questionnaire Submission</h2>

	<h3>Contact Information</h3>
	<ul>
		<li><strong>First Name:</strong> {{ $data['first_name'] ?? '' }}</li>
		<li><strong>Last Name:</strong> {{ $data['last_name'] ?? '' }}</li>
		<li><strong>Email:</strong> {{ $data['email'] ?? '' }}</li>
		<li><strong>Phone:</strong> {{ $data['phone'] ?? '' }}</li>
		<li><strong>Address:</strong> {{ $data['address'] ?? '' }}</li>
	</ul>

	<h3>Project Information</h3>
	<ul>
		<li><strong>Square Footage:</strong> {{ $data['sq_footage'] ?? '' }}</li>
		<li><strong>Type:</strong> {{ $data['project_type'] ?? '' }}</li>
		<li><strong>Established Budget:</strong> {{ $data['established_budget'] ?? '' }}</li>
		<li><strong>How did you hear about me?:</strong> {{ $data['how_did_you_hear'] ?? '' }}</li>
		<li><strong>Worked with Designer Before:</strong> {{ $data['worked_with_designer'] ?? '' }}</li>
		<li><strong>Special Considerations:</strong> {{ $data['special_considerations'] ?? '' }}</li>
		@if(!empty($data['services']))
		<li><strong>Services Interested In:</strong> {{ is_array($data['services']) ? implode(', ', $data['services']) : $data['services'] }} {{ $data['services_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['working_room']))
		<li><strong>Working Room:</strong> {{ is_array($data['working_room']) ? implode(', ', $data['working_room']) : $data['working_room'] }} {{ $data['working_room_other'] ?? '' }}</li>
		@endif
		<li><strong>Project Goal:</strong> {{ $data['project_goal'] ?? '' }}</li>
		<li><strong>Inspiration Links:</strong> {{ $data['inspiration_links'] ?? '' }}</li>
		<li><strong>Room Activities:</strong> {{ $data['room_activities'] ?? '' }}</li>
		<li><strong>Room Users Characteristics:</strong> {{ $data['room_users_characteristics'] ?? '' }}</li>
		<li><strong>Hobbies in Design:</strong> {{ $data['hobbies_in_design'] ?? '' }}</li>
		<li><strong>Special Needs:</strong> {{ $data['special_needs'] ?? '' }}</li>
		<li><strong>Space Goal:</strong> {{ $data['space_goal'] ?? '' }}</li>
	</ul>

	<h3>Project Planner</h3>
	<ul>
		@if(!empty($data['planner_project_budget']))
		<li><strong>Project Budget:</strong> {{ is_array($data['planner_project_budget']) ? implode(', ', $data['planner_project_budget']) : $data['planner_project_budget'] }}</li>
		@endif
		@if(!empty($data['involvement_process']))
		<li><strong>Involvement in Process:</strong> {{ is_array($data['involvement_process']) ? implode(', ', $data['involvement_process']) : $data['involvement_process'] }}</li>
		@endif
		@if(!empty($data['timeframe']))
		<li><strong>Project Timeframe:</strong> {{ is_array($data['timeframe']) ? implode(', ', $data['timeframe']) : $data['timeframe'] }}</li>
		@endif
		@if(!empty($data['construction_time']))
		<li><strong>Construction Time:</strong> {{ is_array($data['construction_time']) ? implode(', ', $data['construction_time']) : $data['construction_time'] }}</li>
		@endif
	</ul>

	<h3>Style Preference</h3>
	<ul>
		@if(!empty($data['design_style']))
		<li><strong>Design Style:</strong> {{ is_array($data['design_style']) ? implode(', ', $data['design_style']) : $data['design_style'] }}</li>
		@endif
		<li><strong>Flooring Preference:</strong> {{ isset($data['flooring_preference']) ? (is_array($data['flooring_preference']) ? implode(', ', $data['flooring_preference']) : $data['flooring_preference']) : '' }} {{ $data['flooring_preference_other'] ?? '' }}</li>
		<li><strong>Window Coverings:</strong> {{ isset($data['window_coverings']) ? (is_array($data['window_coverings']) ? implode(', ', $data['window_coverings']) : $data['window_coverings']) : '' }}</li>
		@if(!empty($data['color_palette']))
		<li><strong>Color Palette:</strong> {{ is_array($data['color_palette']) ? implode(', ', $data['color_palette']) : $data['color_palette'] }}</li>
		@endif
		@if(!empty($data['decorative_elements']))
		<li><strong>Decorative Elements:</strong> {{ is_array($data['decorative_elements']) ? implode(', ', $data['decorative_elements']) : $data['decorative_elements'] }} {{ $data['decorative_elements_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['seating_arrangement']))
		<li><strong>Seating Arrangement:</strong> {{ is_array($data['seating_arrangement']) ? implode(', ', $data['seating_arrangement']) : $data['seating_arrangement'] }}</li>
		@endif
		@if(!empty($data['lighting_preference']))
		<li><strong>Lighting Preference:</strong> {{ is_array($data['lighting_preference']) ? implode(', ', $data['lighting_preference']) : $data['lighting_preference'] }}</li>
		@endif
		@if(!empty($data['furniture_style']))
		<li><strong>Furniture Style:</strong> {{ is_array($data['furniture_style']) ? implode(', ', $data['furniture_style']) : $data['furniture_style'] }}</li>
		@endif
		@if(!empty($data['dislike_color']))
		<li><strong>Dislike Color:</strong> {{ is_array($data['dislike_color']) ? implode(', ', $data['dislike_color']) : $data['dislike_color'] }}</li>
		@endif
		<li><strong>Dislike Pattern:</strong> {{ $data['dislike_pattern'] ?? '' }}</li>
		@if(!empty($data['shelved_type']))
		<li><strong>Shelved Type:</strong> {{ is_array($data['shelved_type']) ? implode(', ', $data['shelved_type']) : $data['shelved_type'] }}</li>
		@endif
		@if(!empty($data['mood']))
		<li><strong>Mood:</strong> {{ is_array($data['mood']) ? implode(', ', $data['mood']) : $data['mood'] }} {{ $data['mood_other'] ?? '' }}</li>
		@endif
		<li><strong>Items to Keep:</strong> {{ $data['items_to_keep'] ?? '' }}</li>
	</ul>

	<h3>Bathroom Preference</h3>
	<ul>
		<li><strong>Bathroom Design Style:</strong> {{ $data['bathroom_design_style'] ?? '' }}</li>
		@if(!empty($data['shower_hardware']))
		<li><strong>Shower Hardware:</strong> {{ is_array($data['shower_hardware']) ? implode(', ', $data['shower_hardware']) : $data['shower_hardware'] }}</li>
		@endif
		@if(!empty($data['heating_preference']))
		<li><strong>Heating Preference:</strong> {{ is_array($data['heating_preference']) ? implode(', ', $data['heating_preference']) : $data['heating_preference'] }}</li>
		@endif
		@if(!empty($data['tiling_preference']))
		<li><strong>Tiling Preference:</strong> {{ is_array($data['tiling_preference']) ? implode(', ', $data['tiling_preference']) : $data['tiling_preference'] }} {{ $data['tiling_preference_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['basin_preference']))
		<li><strong>Basin Preference:</strong> {{ is_array($data['basin_preference']) ? implode(', ', $data['basin_preference']) : $data['basin_preference'] }} {{ $data['basin_preference_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['storing_preference']))
		<li><strong>Storing Preference:</strong> {{ is_array($data['storing_preference']) ? implode(', ', $data['storing_preference']) : $data['storing_preference'] }} {{ $data['storing_preference_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['ventilation']))
		<li><strong>Ventilation:</strong> {{ is_array($data['ventilation']) ? implode(', ', $data['ventilation']) : $data['ventilation'] }} {{ $data['ventilation_other'] ?? '' }}</li>
		@endif
	</ul>

	<h3>Kitchen Preference</h3>
	<ul>
		<li><strong>Kitchen Design Style:</strong> {{ $data['kitchen_design_style'] ?? '' }}</li>
		@if(!empty($data['sink_design']))
		<li><strong>Sink Design:</strong> {{ is_array($data['sink_design']) ? implode(', ', $data['sink_design']) : $data['sink_design'] }}</li>
		@endif
		@if(!empty($data['fridge_style']))
		<li><strong>Fridge Style:</strong> {{ is_array($data['fridge_style']) ? implode(', ', $data['fridge_style']) : $data['fridge_style'] }} {{ $data['fridge_style_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['oven_preference']))
		<li><strong>Oven Preference:</strong> {{ is_array($data['oven_preference']) ? implode(', ', $data['oven_preference']) : $data['oven_preference'] }}</li>
		@endif
		@if(!empty($data['splashback_design']))
		<li><strong>Splashback Design:</strong> {{ is_array($data['splashback_design']) ? implode(', ', $data['splashback_design']) : $data['splashback_design'] }} {{ $data['splashback_design_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['cooking_fuel']))
		<li><strong>Cooking Fuel:</strong> {{ is_array($data['cooking_fuel']) ? implode(', ', $data['cooking_fuel']) : $data['cooking_fuel'] }} {{ $data['cooking_fuel_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['seating_configuration']))
		<li><strong>Seating Configuration:</strong> {{ is_array($data['seating_configuration']) ? implode(', ', $data['seating_configuration']) : $data['seating_configuration'] }} {{ $data['seating_configuration_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['storage_options']))
		<li><strong>Storage Options:</strong> {{ is_array($data['storage_options']) ? implode(', ', $data['storage_options']) : $data['storage_options'] }} {{ $data['storage_options_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['island_yn']))
		<li><strong>Island Preference:</strong> {{ is_array($data['island_yn']) ? implode(', ', $data['island_yn']) : $data['island_yn'] }} {{ $data['island_yn_other'] ?? '' }}</li>
		@endif
	</ul>

	<h3>Living Room Preference</h3>
	<ul>
		<li><strong>Living Room Preference:</strong> {{ $data['living_room_preference'] ?? '' }}</li>
	</ul>

	<h3>Bedroom Preference</h3>
	<ul>
		@if(!empty($data['bedding_preference']))
		<li><strong>Bedding Preference:</strong> {{ is_array($data['bedding_preference']) ? implode(', ', $data['bedding_preference']) : $data['bedding_preference'] }} {{ $data['bedding_preference_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['bed_size']))
		<li><strong>Bed Size:</strong> {{ is_array($data['bed_size']) ? implode(', ', $data['bed_size']) : $data['bed_size'] }} {{ $data['bed_size_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['bedroom_lighting_preference']))
		<li><strong>Lighting Preference:</strong> {{ is_array($data['bedroom_lighting_preference']) ? implode(', ', $data['bedroom_lighting_preference']) : $data['bedroom_lighting_preference'] }} {{ $data['bedroom_lighting_preference_other'] ?? '' }}</li>
		@endif
		@if(!empty($data['bedroom_storage_solutions']))
		<li><strong>Storage Solutions:</strong> {{ is_array($data['bedroom_storage_solutions']) ? implode(', ', $data['bedroom_storage_solutions']) : $data['bedroom_storage_solutions'] }} {{ $data['bedroom_storage_solutions_other'] ?? '' }}</li>
		@endif
	</ul>

	<h3>Furniture Preference</h3>
	<ul>
		<li><strong>Furnishings Purchase Location:</strong> {{ $data['furnishings_purchase_location'] ?? '' }}</li>
		<li><strong>Frequent Websites:</strong> {{ $data['frequent_websites'] ?? '' }}</li>
		<li><strong>Repurpose Pieces:</strong> {{ $data['repurpose_pieces'] ?? '' }}</li>
		@if(!empty($data['furnishing_spend']))
		<li><strong>Furnishing Spend:</strong> {{ is_array($data['furnishing_spend']) ? implode(', ', $data['furnishing_spend']) : $data['furnishing_spend'] }}</li>
		@endif
	</ul>

	<hr>
	<p>Thanks,<br>{{ config('app.name') }}</p>
</body>
</html>
