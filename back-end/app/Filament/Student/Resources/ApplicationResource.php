<?php

namespace App\Filament\Student\Resources;

use App\Filament\Student\Resources\ApplicationResource\Pages;
use App\Models\Application;
use App\Rules\GtZero;
use Closure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->rules([
                        function () {
                            return function (string $attribute, $value, Closure $fail) {
                                if ($value <= 0) {
                                    $fail('The :attribute must be greater than 0.');
                                }
                            };
                        },]),
                Forms\Components\Textarea::make('reason')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordAction(null)
            ->query(Application::query()
                ->where('student_id', auth()->user()->student->id))
            ->columns([
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\TextColumn::make('amount')->numeric(2),
                Tables\Columns\TextColumn::make('reason'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => Application::getStatusColor($state)),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->visible(fn(Application $record) => $record->status == Application::IS_PENDING),
                Tables\Actions\DeleteAction::make()
                    ->visible(fn(Application $record) => $record->status == Application::IS_PENDING),
            ])
            ->bulkActions([
                //                Tables\Actions\BulkActionGroup::make([
                //                    Tables\Actions\DeleteBulkAction::make(),
                //                ]),
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
//            'create' => Pages\CreateApplication::route('/create'),
            //            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }
}
