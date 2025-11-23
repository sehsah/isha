<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questionnaire_responses', function (Blueprint $table) {
            $table->id();
            // Contact Information
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('age')->nullable();

            // Project Information
            $table->string('sq_footage')->nullable();
            $table->string('project_type')->nullable();
            $table->string('established_budget')->nullable();
            $table->string('how_did_you_hear')->nullable();
            $table->string('worked_with_designer')->nullable();
            $table->text('special_considerations')->nullable();
            $table->json('services')->nullable();
            $table->string('services_other')->nullable();
            $table->json('working_room')->nullable();
            $table->string('working_room_other')->nullable();
            $table->text('project_goal')->nullable();
            $table->text('inspiration_links')->nullable();
            $table->text('room_activities')->nullable();
            $table->text('room_users_characteristics')->nullable();
            $table->text('hobbies_in_design')->nullable();
            $table->text('special_needs')->nullable();
            $table->text('space_goal')->nullable();

            // Project Planner
            $table->json('planner_project_budget')->nullable();
            $table->json('involvement_process')->nullable();
            $table->json('timeframe')->nullable();
            $table->json('construction_time')->nullable();

            // Style Preference
            $table->json('design_style')->nullable();
            $table->string('design_style_other')->nullable();
            $table->json('flooring_preference')->nullable();
            $table->string('flooring_preference_other')->nullable();
            $table->json('window_coverings')->nullable();
            $table->string('window_coverings_other')->nullable();
            $table->json('color_palette')->nullable();
            $table->json('decorative_elements')->nullable();
            $table->string('decorative_elements_other')->nullable();
            $table->json('seating_arrangement')->nullable();
            $table->json('lighting_preference')->nullable();
            $table->json('furniture_style')->nullable();
            $table->text('dislike_color')->nullable();
            $table->text('dislike_pattern')->nullable();
            $table->json('shelved_type')->nullable();
            $table->json('mood')->nullable();
            $table->string('mood_other')->nullable();
            $table->text('items_to_keep')->nullable();

            // Bathroom Preference
            $table->json('bathroom_style')->nullable();
            $table->json('shower_hardware')->nullable();
            $table->json('heating_preference')->nullable();
            $table->json('tiling_preference')->nullable();
            $table->string('tiling_preference_other')->nullable();
            $table->json('basin_preference')->nullable();
            $table->string('basin_preference_other')->nullable();
            $table->json('storing_preference')->nullable();
            $table->string('storing_preference_other')->nullable();
            $table->json('ventilation')->nullable();
            $table->string('ventilation_other')->nullable();

            // Kitchen Preference
            $table->json('kitchen_style')->nullable();
            $table->json('sink_design')->nullable();
            $table->json('fridge_style')->nullable();
            $table->string('fridge_style_other')->nullable();
            $table->json('oven_preference')->nullable();
            $table->string('oven_preference_other')->nullable();
            $table->json('splashback_design')->nullable();
            $table->string('splashback_design_other')->nullable();
            $table->json('cooking_fuel')->nullable();
            $table->string('cooking_fuel_other')->nullable();
            $table->json('seating_configuration')->nullable();
            $table->string('seating_configuration_other')->nullable();
            $table->json('storage_options')->nullable();
            $table->string('storage_options_other')->nullable();
            $table->json('island_yn')->nullable();
            $table->string('island_yn_other')->nullable();

            // Living Room Preference
            $table->text('living_room_preference')->nullable();

            // Bedroom Preference
            $table->json('bedding_preference')->nullable();
            $table->string('bedding_preference_other')->nullable();
            $table->json('bed_size')->nullable();
            $table->string('bed_size_other')->nullable();
            $table->json('bedroom_lighting_preference')->nullable();
            $table->string('bedroom_lighting_preference_other')->nullable();
            $table->json('bedroom_storage_solutions')->nullable();
            $table->string('bedroom_storage_solutions_other')->nullable();

            // Furniture Preference
            $table->string('furnishings_purchase_location')->nullable();
            $table->string('frequent_websites')->nullable();
            $table->text('repurpose_pieces')->nullable();
            $table->json('furnishing_spend')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionnaire_responses');
    }
};