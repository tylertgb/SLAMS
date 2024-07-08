<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DisbursementResource\Pages;
use App\Models\Application;
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
                Forms\Components\Select::make('application_code')
                    ->options(fn() => Application::isAccepted()->pluck('code', 'code'))
                    ->searchable()
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
                Tables\Columns\TextColumn::make('application_code')
                    ->numeric()
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('application.student.student_id')
                    ->label('Index Number')
                    ->numeric()
                    ->sortable()->searchable(),

                Tables\Columns\TextColumn::make('application.student.fullname')
                    ->label('Full Name')

                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('amount')
                    ->numeric(2)
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('disbursed_at')
                    ->label('Date disbursed')
                    ->date('d M, Y')
                    ->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
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
