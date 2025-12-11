<?php

namespace App\Filament\Resources\QuestionnaireResponseResource\Pages;

use App\Filament\Resources\QuestionnaireResponseResource;
use Filament\Resources\Pages\ViewRecord;

class ViewQuestionnaireResponse extends ViewRecord
{
    protected static string $resource = QuestionnaireResponseResource::class;
    
    protected string $view = 'filament.resources.questionnaire-response-resource.pages.view-questionnaire-response';
}