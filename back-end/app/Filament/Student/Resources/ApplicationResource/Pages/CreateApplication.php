<?php

namespace App\Filament\Student\Resources\ApplicationResource\Pages;

use App\Filament\Student\Resources\ApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateApplication extends CreateRecord
{
    protected static string $resource = ApplicationResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['student_id'] = auth()->user()->student->id;
        return $data; // TODO: Change the autogenerated stub
    }

}
