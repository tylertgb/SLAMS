<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RepaymentResource\Pages;
use App\Filament\Admin\Resources\RepaymentResource\RelationManagers;
use App\Models\Application;
use App\Models\Repayment;
use Closure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Carbon;

class RepaymentResource extends Resource
{
    protected static ?string $model = Repayment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('application_id')
                    ->label('Application code')
                    ->options(fn() => Application::isDisbursed()->pluck('code', 'id'))
                    ->exists('applications', 'id')
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->numeric()
                    ->rules([
                        function () {
                            return function (string $attribute, $value, Closure $fail) {
                                if ($value <= 0) {
                                    $fail('The :attribute must be greater than 0.');
                                }
                            };
                        },
                    ]),
                Forms\Components\TextInput::make('ref')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('application.code')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('application.student.index_number')
                    ->label('Student ID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('application.student.fullname')
                    ->label('Student')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount')
                    ->numeric(2)
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date')
                    ->date('d M, Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('verified_at')
                    ->label('Verified On')
                    ->date('d M, Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ref')
                    ->placeholder('N/A')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('verify')
                    ->icon('heroicon-o-check-badge')
                    ->requiresConfirmation()
                    ->action(function (Repayment $record) {
                        $record->update([
                            'verified_at' => now(),
                            'verified_by' => auth()->id()
                        ]);

                        Notification::make('verified')
                            ->title('Verified')
                            ->body('Repayment verified successfully');
                    })->visible(fn(Repayment $record) => $record->verified_at == null),
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
            'index' => Pages\ListRepayments::route('/'),
//            'create' => Pages\CreateRepayment::route('/create'),
//            'edit' => Pages\EditRepayment::route('/{record}/edit'),
        ];
    }
}
