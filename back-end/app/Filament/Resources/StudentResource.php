<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
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
                Forms\Components\TextInput::make('guardian_fullname'),
                Forms\Components\TextInput::make('guardian_phone_number')
                    ->tel(),
                Forms\Components\TextInput::make('guardian_email')
                    ->email(),
                Forms\Components\TextInput::make('guardian_income')
                    ->numeric(),
                Forms\Components\TextInput::make('transcript'),
                Forms\Components\TextInput::make('proof_of_enrolment'),
                Forms\Components\TextInput::make('ezwitch_card'),
                Forms\Components\TextInput::make('profile_picture'),
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
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
