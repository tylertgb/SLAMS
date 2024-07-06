<?php

namespace App\Filament\Student\Resources\ApplicationResource\Pages;

use App\Filament\Student\Resources\ApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApplications extends ListRecords
{
    protected static string $resource = ApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->mutateFormDataUsing(function (?array $data) {
                    $data['student_id'] = auth()->user()->student->id;

                    return $data;
                }),
        ];
    }
}
