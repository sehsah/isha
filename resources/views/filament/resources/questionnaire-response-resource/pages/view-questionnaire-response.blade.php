<x-filament-panels::page>
    <style>
        section.fi-section.fi-section-has-header.mt-3 {
            margin-top: 30px;
        }        
        p.text-sm.font-medium.text-gray-500.dark\:text-gray-400 {
            color: #6d6d6d;
            font-size: 18px;
        }        
    </style>
    <div class="space-y-6">
        <!-- Contact Information -->
        <x-filament::section class="mt-3">
            <x-slot name="heading">
                Contact Information
            </x-slot>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">First Name</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->first_name ?? 'N/A' }}</p>
                </div>
                
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Last Name</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->last_name ?? 'N/A' }}</p>
                </div>
                
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Email</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->email ?? 'N/A' }}</p>
                </div>
                
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Phone</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->phone ?? 'N/A' }}</p>
                </div>
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Address</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->address ?? 'N/A' }}</p>
                </div>
                
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Age</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->age ?? 'N/A' }}</p>
                </div>
            </div>
        </x-filament::section>

        <!-- Project Information -->
        <x-filament::section class="mt-3">
            <x-slot name="heading">
                Project Information
            </x-slot>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Square Footage</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->sq_footage ?? 'N/A' }}</p>
                </div>
                
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Project Type</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->project_type ?? 'N/A' }}</p>
                </div>
                
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Established Budget</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->established_budget ?? 'N/A' }}</p>
                </div>
                
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">How Did You Hear About Us</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->how_did_you_hear ?? 'N/A' }}</p>
                </div>
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Services</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->services && is_array($record->services))
                            {{ implode(', ', $record->services) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                @if($record->services_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Services (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->services_other }}</p>
                </div>
                @endif
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Working Room</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->working_room && is_array($record->working_room))
                            {{ implode(', ', $record->working_room) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                @if($record->working_room_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Working Room (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->working_room_other }}</p>
                </div>
                @endif
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Project Goal</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->project_goal ?? 'N/A' }}</p>
                </div>
                
                @if($record->inspiration_links)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Inspiration Links</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->inspiration_links }}</p>
                </div>
                @endif
                
                @if($record->room_activities)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Room Activities</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->room_activities }}</p>
                </div>
                @endif
                
                @if($record->room_users_characteristics)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Room Users Characteristics</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->room_users_characteristics }}</p>
                </div>
                @endif
                
                @if($record->hobbies_in_design)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Hobbies in Design</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->hobbies_in_design }}</p>
                </div>
                @endif
                
                @if($record->special_needs)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Special Needs</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->special_needs }}</p>
                </div>
                @endif
                
                @if($record->space_goal)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Space Goal</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->space_goal }}</p>
                </div>
                @endif
                
                @if($record->special_considerations)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Special Considerations</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->special_considerations }}</p>
                </div>
                @endif
            </div>
        </x-filament::section>

        <!-- Style Preference -->
        <x-filament::section class="mt-3">
            <x-slot name="heading">
                Style Preference
            </x-slot>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Design Style</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->design_style && is_array($record->design_style))
                            {{ implode(', ', $record->design_style) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                @if($record->design_style_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Design Style (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->design_style_other }}</p>
                </div>
                @endif
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Flooring Preference</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->flooring_preference && is_array($record->flooring_preference))
                            {{ implode(', ', $record->flooring_preference) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                @if($record->flooring_preference_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Flooring Preference (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->flooring_preference_other }}</p>
                </div>
                @endif
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Window Coverings</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->window_coverings && is_array($record->window_coverings))
                            {{ implode(', ', $record->window_coverings) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                @if($record->window_coverings_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Window Coverings (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->window_coverings_other }}</p>
                </div>
                @endif
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Color Palette</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->color_palette && is_array($record->color_palette))
                            {{ implode(', ', $record->color_palette) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Decorative Elements</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->decorative_elements && is_array($record->decorative_elements))
                            {{ implode(', ', $record->decorative_elements) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                @if($record->decorative_elements_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Decorative Elements (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->decorative_elements_other }}</p>
                </div>
                @endif
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Seating Arrangement</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->seating_arrangement && is_array($record->seating_arrangement))
                            {{ implode(', ', $record->seating_arrangement) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Lighting Preference</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->lighting_preference && is_array($record->lighting_preference))
                            {{ implode(', ', $record->lighting_preference) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Furniture Style</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->furniture_style && is_array($record->furniture_style))
                            {{ implode(', ', $record->furniture_style) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                @if($record->dislike_color)
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Dislike Color</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->dislike_color }}</p>
                </div>
                @endif
                
                @if($record->dislike_pattern)
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Dislike Pattern</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->dislike_pattern }}</p>
                </div>
                @endif
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Shelved Type</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->shelved_type && is_array($record->shelved_type))
                            {{ implode(', ', $record->shelved_type) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Mood</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if($record->mood && is_array($record->mood))
                            {{ implode(', ', $record->mood) }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
                
                @if($record->mood_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Mood (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->mood_other }}</p>
                </div>
                @endif
                
                @if($record->items_to_keep)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Items to Keep</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->items_to_keep }}</p>
                </div>
                @endif
            </div>
        </x-filament::section>

        <!-- Bathroom Preference -->
        @if($record->bathroom_style || $record->heating_preference || $record->tiling_preference_other || $record->basin_preference_other || $record->storing_preference_other || $record->ventilation_other)
        <x-filament::section class="mt-3">
            <x-slot name="heading">
                Bathroom Preference
            </x-slot>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @if($record->bathroom_style)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Bathroom Style</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->bathroom_style))
                            {{ implode(', ', $record->bathroom_style) }}
                        @else
                            {{ $record->bathroom_style }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->heating_preference)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Heating Preference</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->heating_preference))
                            {{ implode(', ', $record->heating_preference) }}
                        @else
                            {{ $record->heating_preference }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->tiling_preference_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Tiling Preference</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->tiling_preference_other }}</p>
                </div>
                @endif
                
                @if($record->basin_preference_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Basin Preference</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->basin_preference_other }}</p>
                </div>
                @endif
                
                @if($record->storing_preference_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Storage Preference</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->storing_preference_other }}</p>
                </div>
                @endif
                
                @if($record->ventilation_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Ventilation</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->ventilation_other }}</p>
                </div>
                @endif
            </div>
        </x-filament::section>
        @endif

        <!-- Kitchen Preference -->
        @if($record->kitchen_style || $record->sink_design || $record->fridge_style || $record->oven_preference || $record->cooking_fuel || $record->seating_configuration || $record->storage_options || $record->island_yn)
        <x-filament::section class="mt-3">
            <x-slot name="heading">
                Kitchen Preference
            </x-slot>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @if($record->kitchen_style)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Kitchen Style</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->kitchen_style))
                            {{ implode(', ', $record->kitchen_style) }}
                        @else
                            {{ $record->kitchen_style }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->sink_design)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Sink Design</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->sink_design))
                            {{ implode(', ', $record->sink_design) }}
                        @else
                            {{ $record->sink_design }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->fridge_style)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Fridge Style</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->fridge_style))
                            {{ implode(', ', $record->fridge_style) }}
                        @else
                            {{ $record->fridge_style }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->fridge_style_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Fridge Style (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->fridge_style_other }}</p>
                </div>
                @endif
                
                @if($record->oven_preference)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Oven Preference</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->oven_preference))
                            {{ implode(', ', $record->oven_preference) }}
                        @else
                            {{ $record->oven_preference }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->oven_preference_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Oven Preference (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->oven_preference_other }}</p>
                </div>
                @endif
                
                @if($record->cooking_fuel)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Cooking Fuel</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->cooking_fuel))
                            {{ implode(', ', $record->cooking_fuel) }}
                        @else
                            {{ $record->cooking_fuel }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->cooking_fuel_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Cooking Fuel (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->cooking_fuel_other }}</p>
                </div>
                @endif
                
                @if($record->seating_configuration)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Seating Configuration</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->seating_configuration))
                            {{ implode(', ', $record->seating_configuration) }}
                        @else
                            {{ $record->seating_configuration }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->seating_configuration_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Seating Configuration (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->seating_configuration_other }}</p>
                </div>
                @endif
                
                @if($record->storage_options)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Storage Options</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->storage_options))
                            {{ implode(', ', $record->storage_options) }}
                        @else
                            {{ $record->storage_options }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->storage_options_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Storage Options (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->storage_options_other }}</p>
                </div>
                @endif
                
                @if($record->island_yn)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Island</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->island_yn))
                            {{ implode(', ', $record->island_yn) }}
                        @else
                            {{ $record->island_yn }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->island_yn_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Island (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->island_yn_other }}</p>
                </div>
                @endif
            </div>
        </x-filament::section>
        @endif

        <!-- Living Room Preference -->
        @if($record->living_room_preference)
        <x-filament::section class="mt-3">
            <x-slot name="heading">
                Living Room Preference
            </x-slot>
            
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Living Room Preference</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->living_room_preference }}</p>
                </div>
            </div>
        </x-filament::section>
        @endif

        <!-- Bedroom Preference -->
        @if($record->bedding_preference || $record->bed_size || $record->bedroom_lighting_preference || $record->bedroom_storage_solutions_other)
        <x-filament::section class="mt-3">
            <x-slot name="heading">
                Bedroom Preference
            </x-slot>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @if($record->bedding_preference)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Bedding Preference</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->bedding_preference))
                            {{ implode(', ', $record->bedding_preference) }}
                        @else
                            {{ $record->bedding_preference }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->bedding_preference_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Bedding Preference (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->bedding_preference_other }}</p>
                </div>
                @endif
                
                @if($record->bed_size)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Bed Size</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->bed_size))
                            {{ implode(', ', $record->bed_size) }}
                        @else
                            {{ $record->bed_size }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->bed_size_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Bed Size (Other)</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->bed_size_other }}</p>
                </div>
                @endif
                
                @if($record->bedroom_lighting_preference)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Bedroom Lighting Preference</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->bedroom_lighting_preference))
                            {{ implode(', ', $record->bedroom_lighting_preference) }}
                        @else
                            {{ $record->bedroom_lighting_preference }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($record->bedroom_storage_solutions_other)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Bedroom Storage Solutions</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->bedroom_storage_solutions_other }}</p>
                </div>
                @endif
            </div>
        </x-filament::section>
        @endif

        <!-- Furniture Preference -->
        @if($record->repurpose_pieces || $record->furnishing_spend)
        <x-filament::section class="mt-3">
            <x-slot name="heading">
                Furniture Preference
            </x-slot>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @if($record->repurpose_pieces)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Repurpose Pieces</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->repurpose_pieces }}</p>
                </div>
                @endif
                
                @if($record->furnishing_spend)
                <div class="md:col-span-2">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Furnishing Spend</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">
                        @if(is_array($record->furnishing_spend))
                            {{ implode(', ', $record->furnishing_spend) }}
                        @else
                            {{ $record->furnishing_spend }}
                        @endif
                    </p>
                </div>
                @endif
            </div>
        </x-filament::section>
        @endif

        <!-- Project Files and Links -->
        @if($record->project_files || $record->google_drive_link)
        <x-filament::section class="mt-3">
            <x-slot name="heading">
                Project Files and Links
            </x-slot>
            
            <div class="grid grid-cols-1 gap-4">
                @if($record->project_files && is_array($record->project_files) && count($record->project_files) > 0)
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Project Files</p>
                    <div class="mt-2 space-y-2">
                        @foreach($record->project_files as $file)
                            <a href="{{ Storage::url($file) }}" target="_blank" class="flex items-center text-sm text-primary-600 hover:text-primary-800 dark:text-primary-400 dark:hover:text-primary-300">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                {{ basename($file) }}
                            </a>
                        @endforeach
                    </div>
                </div>
                @endif
                
                @if($record->google_drive_link)
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Google Drive Link</p>
                    <a href="{{ $record->google_drive_link }}" target="_blank" class="mt-1 text-sm text-primary-600 hover:text-primary-800 dark:text-primary-400 dark:hover:text-primary-300">
                        {{ $record->google_drive_link }}
                    </a>
                </div>
                @endif
            </div>
        </x-filament::section>
        @endif

        <!-- Submission Date -->
        <x-filament::section class="mt-3">
            <x-slot name="heading">
                Submission Information
            </x-slot>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Submitted At</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->created_at->format('F d, Y h:i A') }}</p>
                </div>
                
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Last Updated</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $record->updated_at->format('F d, Y h:i A') }}</p>
                </div>
            </div>
        </x-filament::section>
    </div>
</x-filament-panels::page>
