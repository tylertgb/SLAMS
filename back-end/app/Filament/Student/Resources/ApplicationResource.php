<?php

namespace App\Filament\Student\Resources;

use App\Filament\Student\Resources\ApplicationResource\Pages;
use App\Filament\Student\Resources\ApplicationResource\RelationManagers;
use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('amount'),
                Forms\Components\Textarea::make('reason'),
                Forms\Components\TextInput::make('student_id')
                    ->default(auth()->user()->student->id)->hidden(),
            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->query(Application::query()->where('student_id', auth()->user()->student->id))
            ->columns([
                Tables\Columns\TextColumn::make('amount')->numeric(2),
                Tables\Columns\TextColumn::make('reason'),
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
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
//            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }
}
