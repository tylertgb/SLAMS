<?php

namespace App\Filament\Student\Pages;

use App\Models\Student;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Contracts\Auth\Authenticatable;

class Profile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.profile';

    public ?array $data = [];

    public Student $student;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Personal Info')
                    ->columns()
                    ->schema([
                        TextInput::make('index_number')
                            ->required(),

                        TextInput::make('fullname')
                            ->label('Full Name'),
                        //                            ->required(),

                        Select::make('program_id')
                            ->label('Program')
                            ->relationship('program', 'name'),
                        //                            ->required(),

                        TextInput::make('entry_year')
                            ->numeric()
                            ->required(),

                        Select::make('level'),
                        //                            ->required(),

                        Select::make('gender')
                            ->options([
                                'M' => 'M',
                                'F' => 'F',
                            ]),
                        //                            ->required(),

                    ]),

                Section::make('Contact info')
                    ->columns()
                    ->schema([
                        TextInput::make('contact_address')
                            ->label('Address'),
                        //                            ->required(),

                        TextInput::make('contact_email')
                            ->label('Email'),
                        //                            ->email()
                        //                            ->required(),

                        TextInput::make('contact_phone')
                            ->label('Phone Number'),
                        //                            ->required()

                    ]),

                Section::make('Income info')
                    ->columns()
                    ->schema([
                        TextInput::make('annual_income')
                            ->numeric(),
                        //                            ->required(),

                        TextInput::make('tin')
                            ->label('TIN'),
                        //                            ->required(),

                    ]),

                Section::make('Guardian info')
                    ->columns()
                    ->schema([
                        TextInput::make('guardian_fullname')
                            ->label('Full Name'),
                        //                            ->required(),

                        TextInput::make('guardian_phone_number')
                            ->label('Phone Number'),
                        //                            ->required(),

                        TextInput::make('guardian_email'),
                        //                            ->label('Email'),

                        TextInput::make('guardian_income')
                            ->label('Income'),
                        //                            ->required(),

                    ]),

                Section::make('Documents')
                    ->columns()
                    ->schema([
                        FileUpload::make('transcript'),
                        //                            ->required(),

                        FileUpload::make('proof_of_enrolment')
                            ->label('Admission Letter'),
                        //                            ->required(),

                        FileUpload::make('ezwitch_card'),
                        //                            ->required(),

                        FileUpload::make('profile_picture'),
                        //                            ->required(),

                    ]),

            ])
            ->statePath('data')
            ->model($this->student);
    }

    public function create()
    {
        $this->student->update($this->form->getState());
        Notification::make('created')
            ->body('Profile updated successfully')
            ->success()
            ->send();
    }

    public function mount(Authenticatable $user): void
    {
        $this->student = Student::where('id', $user->student_id)->first();
        $this->form->fill($this->student->toArray());
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
