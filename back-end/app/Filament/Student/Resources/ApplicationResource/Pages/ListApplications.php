<?php

namespace App\Filament\Student\Resources\ApplicationResource\Pages;

use App\Filament\Student\Resources\ApplicationResource;
use App\Models\Application;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListApplications extends ListRecords
{
    protected static string $resource = ApplicationResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->hidden(fn() => !auth()->user()
                        ->student->profile_completed),
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),

            'pending' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->isPending()),

            'reviewed' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->isReviewed()),

            'accepted' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->isAccepted()),

            'rejected' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->isRejected()),

            'disbursed' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->isDisbursed()),

            'repaid' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->isRepaid()),
        ];
    }
}
