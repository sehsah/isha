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

        ]);
        
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
