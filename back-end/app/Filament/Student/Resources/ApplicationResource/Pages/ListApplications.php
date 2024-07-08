<?php

namespace App\Filament\Student\Resources\ApplicationResource\Pages;

use App\Filament\Student\Resources\ApplicationResource;
use App\Models\Application;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApplications extends ListRecords
{
    protected static string $resource = ApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->visible(fn() => auth()->user()
                        ->student->applications()
                        ->isNotAccepted()
                        ->count() >= 0),
        ];
    }
}
