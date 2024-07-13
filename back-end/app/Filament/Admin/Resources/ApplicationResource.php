<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ApplicationResource\Pages;
use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-wallet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('student_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('reason')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordUrl(null)
            ->recordAction(null)
            ->columns([
                Tables\Columns\TextColumn::make('code')
                    ->searchable(),

                Tables\Columns\TextColumn::make('student.index_number')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('student.fullname')
                    ->searchable()
                    ->label('Full Name')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date')
                    ->date('d M, Y')
                    ->sortable(),

                Tables\Columns\TextColumn::make('amount')
                    ->numeric(2)
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => Application::getStatusColor($state)),
            ])
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filters([
                //
            ])
            ->actions([
                self::toggleStatusAction(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListApplications::route('/'),
//            'create' => Pages\CreateApplication::route('/create'),
//            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }

    private static function toggleStatusAction()
    {
        return Tables\Actions\Action::make('toggle')
            ->visible(fn(Application $record) => $record->canBeToggled)
            ->icon('heroicon-o-arrow-path')
            ->fillForm(function (Application $record) {
                return ['status' => $record->status];
            })
            ->form([
                Forms\Components\Select::make('status')
                    ->options(fn() => [
                        Application::IS_PENDING => Application::IS_PENDING,
                        Application::IS_REVIEWED => Application::IS_REVIEWED,
                        Application::IS_ACCEPTED => Application::IS_ACCEPTED,
                        Application::IS_REJECTED => Application::IS_REJECTED,
                    ])
                    ->required(),
            ])
            ->action(function (array $data, Application $record) {
                $record->status = $data['status'];
                $record->save();
            });
    }
}
