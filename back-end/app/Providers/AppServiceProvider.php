<?php

namespace App\Providers;

use App\Filament\Student\Resources\ApplicationResource\Pages\ListApplications;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        FilamentView::registerRenderHook(
            PanelsRenderHook::RESOURCE_PAGES_LIST_RECORDS_TABLE_BEFORE,
            fn(): string => auth()->user()?->student?->profile_completed ? '' : 'You need to complete your profile before you can submit an application!',
            scopes: ListApplications::class
        );


    }
}
