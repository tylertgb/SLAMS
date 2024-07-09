<?php

namespace App\Filament\Student\Resources\RepaymentResource\Pages;

use App\Filament\Student\Resources\RepaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRepayments extends ListRecords
{
    protected static string $resource = RepaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
