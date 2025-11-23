<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionnaireResponse extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'services' => 'array',
        'working_room' => 'array',
        'planner_project_budget' => 'array',
        'involvement_process' => 'array',
        'timeframe' => 'array',
        'construction_time' => 'array',
        'design_style' => 'array',
        'flooring_preference' => 'array',
        'window_coverings' => 'array',
        'color_palette' => 'array',
        'decorative_elements' => 'array',
        'seating_arrangement' => 'array',
        'lighting_preference' => 'array',
        'furniture_style' => 'array',
        'shelved_type' => 'array',
        'mood' => 'array',
        'bathroom_style' => 'array',
        'shower_hardware' => 'array',
        'heating_preference' => 'array',
        'tiling_preference' => 'array',
        'basin_preference' => 'array',
        'storing_preference' => 'array',
        'ventilation' => 'array',
        'kitchen_style' => 'array',
        'sink_design' => 'array',
        'fridge_style' => 'array',
        'oven_preference' => 'array',
        'splashback_design' => 'array',
        'cooking_fuel' => 'array',
        'seating_configuration' => 'array',
        'storage_options' => 'array',
        'island_yn' => 'array',
        'bedding_preference' => 'array',
        'bed_size' => 'array',
        'bedroom_lighting_preference' => 'array',
        'bedroom_storage_solutions' => 'array',
        'furnishing_spend' => 'array',
    ];
}