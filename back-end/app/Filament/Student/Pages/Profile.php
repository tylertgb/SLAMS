<?php

namespace App\Filament\Student\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Concerns\HasUnsavedDataChangesAlert;
use Filament\Pages\Page;

class Profile extends Page 
{
   
   
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.profile';

    public ?array $data = [];

    public function form(Form $form): Form  {
        return $form
    
        ->schema([
            Section::make('Personal Info')
            ->columns(2)
            ->schema([
                TextInput::make('name')
            ])
        ])->statePath('data');
    }

    public function create(){
        dd($this->data);
    }

    public function mount(){
        $this->form->fill();
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('create')
            ->label('Save')
            ->submit('create')
            ->keyBindings(['mod+s']),
            
        ];
    }
    public function getFormStatePath(): ?string
    {
        return 'data';
    }
}
