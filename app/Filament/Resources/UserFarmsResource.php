<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserFarmsResource\Pages;
use App\Filament\Resources\UserFarmsResource\RelationManagers;
use App\Models\userFarms;
use App\Models\User;
use App\Models\farm;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserFarmsResource extends Resource
{
    protected static ?string $model = userFarms::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('user_id')
                    ->label('user_name')
                    ->options(User::all()->pluck('name', 'id'))
                    ->searchable(),
                Select::make('farm_id')
                    ->label('farm_name')
                    ->options(farm::all()->pluck('name', 'id'))
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('user_id')->label('userName'),
            Tables\Columns\TextColumn::make('farm_id')->label('farmName'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUserFarms::route('/'),
        ];
    }
}
