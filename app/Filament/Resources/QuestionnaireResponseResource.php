<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionnaireResponseResource\Pages;
use App\Models\QuestionnaireResponse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Actions\ActionGroup;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;

class QuestionnaireResponseResource extends Resource
{
    protected static ?string $model = QuestionnaireResponse::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-clipboard-document';
    protected static ?string $navigationLabel = 'Questionnaires';

    public static function form(Schema $form): Schema
    {
        return $form->schema([
            TextInput::make('user_id'),
            TextInput::make('first_name')->maxLength(255),
            TextInput::make('last_name')->maxLength(255),
            TextInput::make('phone')->maxLength(255),
            TextInput::make('email')->email()->maxLength(255),
            Textarea::make('address')->columnSpanFull(),
            TextInput::make('age'),
            TextInput::make('sq_footage'),
            TextInput::make('project_type'),
            TextInput::make('established_budget'),
            TextInput::make('how_did_you_hear'),
            TextInput::make('worked_with_designer'),
            Textarea::make('special_considerations')->columnSpanFull(),
            TagsInput::make('services'),
            TextInput::make('services_other'),
            TagsInput::make('working_room'),
            TextInput::make('working_room_other'),
            Textarea::make('project_goal')->columnSpanFull(),
            Textarea::make('inspiration_links')->columnSpanFull(),
            Textarea::make('room_activities')->columnSpanFull(),
            Textarea::make('room_users_characteristics')->columnSpanFull(),
            Textarea::make('hobbies_in_design')->columnSpanFull(),
            Textarea::make('special_needs')->columnSpanFull(),
            Textarea::make('space_goal')->columnSpanFull(),
            TagsInput::make('planner_project_budget'),
            TagsInput::make('involvement_process'),
            TagsInput::make('timeframe'),
            TagsInput::make('construction_time'),
            TagsInput::make('design_style'),
            TextInput::make('design_style_other'),
            TagsInput::make('flooring_preference'),
            TextInput::make('flooring_preference_other'),
            TagsInput::make('window_coverings'),
            TextInput::make('window_coverings_other'),
            TagsInput::make('color_palette'),
            TagsInput::make('decorative_elements'),
            TextInput::make('decorative_elements_other'),
            TagsInput::make('seating_arrangement'),
            TagsInput::make('lighting_preference'),
            TagsInput::make('furniture_style'),
            TextInput::make('dislike_color'),
            TextInput::make('dislike_pattern'),
            TagsInput::make('shelved_type'),
            TagsInput::make('mood'),
            TextInput::make('mood_other'),
            Textarea::make('items_to_keep')->columnSpanFull(),
            TagsInput::make('bathroom_style'),
            TagsInput::make('shower_hardware'),
            TagsInput::make('heating_preference'),
            TagsInput::make('tiling_preference'),
            TextInput::make('tiling_preference_other'),
            TagsInput::make('basin_preference'),
            TextInput::make('basin_preference_other'),
            TagsInput::make('storing_preference'),
            TextInput::make('storing_preference_other'),
            TagsInput::make('ventilation'),
            TextInput::make('ventilation_other'),
            TagsInput::make('kitchen_style'),
            TagsInput::make('sink_design'),
            TagsInput::make('fridge_style'),
            TextInput::make('fridge_style_other'),
            TagsInput::make('oven_preference'),
            TextInput::make('oven_preference_other'),
            TagsInput::make('splashback_design'),
            TextInput::make('splashback_design_other'),
            TagsInput::make('cooking_fuel'),
            TextInput::make('cooking_fuel_other'),
            TagsInput::make('seating_configuration'),
            TextInput::make('seating_configuration_other'),
            TagsInput::make('storage_options'),
            TextInput::make('storage_options_other'),
            TagsInput::make('island_yn'),
            TextInput::make('island_yn_other'),
            Textarea::make('living_room_preference')->columnSpanFull(),
            TagsInput::make('bedding_preference'),
            TextInput::make('bedding_preference_other'),
            TagsInput::make('bed_size'),
            TextInput::make('bed_size_other'),
            TagsInput::make('bedroom_lighting_preference'),
            TextInput::make('bedroom_lighting_preference_other'),
            TagsInput::make('bedroom_storage_solutions'),
            TextInput::make('bedroom_storage_solutions_other'),
            Textarea::make('furnishings_purchase_location')->columnSpanFull(),
            Textarea::make('frequent_websites')->columnSpanFull(),
            Textarea::make('repurpose_pieces')->columnSpanFull(),
            TagsInput::make('furnishing_spend'),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('first_name')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('last_name')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('email')->searchable(),
            Tables\Columns\TextColumn::make('phone')->searchable(),
            Tables\Columns\TextColumn::make('created_at')->since()->sortable(),
        ])->recordActions(
            [
                ActionGroup::make(
                    [
                        ViewAction::make(),
                        EditAction::make(),
                        DeleteAction::make(),
                    ]
                )
            ]
        )
            ->actions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestionnaireResponses::route('/'),
            'create' => Pages\CreateQuestionnaireResponse::route('/create'),
            'edit' => Pages\EditQuestionnaireResponse::route('/{record}/edit'),
            'view' => Pages\ViewQuestionnaireResponse::route('/{record}'),
        ];
    }
}
