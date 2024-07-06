<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DisbursementResource\Pages;
use App\Models\Disbursement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DisbursementResource extends Resource
{
    protected static ?string $model = Disbursement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('student_id')
                    ->relationship('student', 'student_id')
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('disbursed_at')
                    ->format('d M, Y')
                    ->default(now())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('disbursed_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('disbursed_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('is_active')
                    ->numeric()
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
            'index' => Pages\ListDisbursements::route('/'),
            // 'create' => Pages\CreateDisbursement::route('/create'),
            // 'edit' => Pages\EditDisbursement::route('/{record}/edit'),
        ];
    }
}
