<?php

namespace App\Filament\Admin\Resources\RepaymentResource\Pages;

use App\Filament\Admin\Resources\RepaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRepayment extends EditRecord
{
    protected static string $resource = RepaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
