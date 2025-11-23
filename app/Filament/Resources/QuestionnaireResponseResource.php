<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionnaireResponseResource\Pages;
use App\Models\QuestionnaireResponse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Schemas\Schema;

class QuestionnaireResponseResource extends Resource
{
    protected static ?string $model = QuestionnaireResponse::class;
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-clipboard-document';
    protected static ?string $navigationLabel = 'Questionnaires';

    public static function form(Schema $form): Schema
    {
        return $form->schema([
            Forms\Components\TextInput::make('first_name')->maxLength(255),
            Forms\Components\TextInput::make('last_name')->maxLength(255),
            Forms\Components\TextInput::make('email')->email()->maxLength(255),
            Forms\Components\TextInput::make('phone')->maxLength(50),
            Forms\Components\Textarea::make('special_considerations')->columnSpanFull(),
            Forms\Components\Textarea::make('project_goal')->columnSpanFull(),
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
        ])->filters([])
          ->actions([
            // Tables\Actions\EditAction::make(),
            // Tables\Actions\DeleteAction::make(),
          ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestionnaireResponses::route('/'),
            'create' => Pages\CreateQuestionnaireResponse::route('/create'),
            'edit' => Pages\EditQuestionnaireResponse::route('/{record}/edit'),
        ];
    }
}
