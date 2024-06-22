<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Personal Info')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('student_id')
                        ->required(),
                    Forms\Components\TextInput::make('program'),
                    Forms\Components\TextInput::make('entry_year'),
                    Forms\Components\TextInput::make('level'),
                    Forms\Components\TextInput::make('exit_year'),
                    Forms\Components\TextInput::make('fullname')
                        ->required(),
                    Forms\Components\TextInput::make('gender'),
                    Forms\Components\TextInput::make('contact_address'),
                    Forms\Components\TextInput::make('contact_email')
                        ->email(),
                    Forms\Components\TextInput::make('contact_phone')
                        ->tel(),
                    Forms\Components\TextInput::make('annual_income')
                        ->numeric(),
                    Forms\Components\TextInput::make('tin'),
                ]),

                Section::make('Guardian Info')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('guardian_fullname')
                    ->label('Full Name'),
                    Forms\Components\TextInput::make('guardian_phone_number')
                    ->label('Phone Number'),
                    Forms\Components\TextInput::make('guardian_email')
                    ->label('Email Address')
                        ->email(),
                    Forms\Components\TextInput::make('guardian_income')
                    ->label('Income(GHc)')
                        ->numeric(),
                ]),
                Section::make('Documents')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('transcript'),
                    Forms\Components\TextInput::make('proof_of_enrolment'),
                    Forms\Components\TextInput::make('ezwitch_card'),
                    Forms\Components\TextInput::make('profile_picture'),
                ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('program')
                    ->searchable(),
                Tables\Columns\TextColumn::make('entry_year')
                    ->searchable(),
                Tables\Columns\TextColumn::make('level')
                    ->searchable(),
                Tables\Columns\TextColumn::make('exit_year')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fullname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('annual_income')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_fullname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_income')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('transcript')
                    ->searchable(),
                Tables\Columns\TextColumn::make('proof_of_enrolment')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ezwitch_card')
                    ->searchable(),
                Tables\Columns\TextColumn::make('profile_picture')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            // 'create' => Pages\CreateStudent::route('/create'),
            // 'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
