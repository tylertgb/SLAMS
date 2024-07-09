<?php

namespace App\Filament\Admin\Resources\RepaymentResource\Pages;

use App\Filament\Admin\Resources\RepaymentResource;
use App\Models\Repayment;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRepayments extends ListRecords
{
    protected static string $resource = RepaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->mutateFormDataUsing(function (?array $data) {
                    $data['verified_at'] = now();
                    $data['verified_by'] = auth()->id();
                    return $data;
                }),
        ];
    }
}
