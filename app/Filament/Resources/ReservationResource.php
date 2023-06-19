<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationResource\Pages;
use App\Filament\Resources\ReservationResource\RelationManagers;
use App\Models\reservation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextInputColumn::make('user_name'),
                Tables\Columns\TextInputColumn::make('farm.name'),
                Tables\Columns\TextInputColumn::make('check_in'),
                Tables\Columns\TextInputColumn::make('check_out'),
                Tables\Columns\TextInputColumn::make('adult'),
                Tables\Columns\TextInputColumn::make('children'),
                Tables\Columns\TextInputColumn::make('room'),
                Tables\Columns\TextInputColumn::make('night'),
                Tables\Columns\TextColumn::make('amnities')
                    ->wrap(),
                Tables\Columns\TextInputColumn::make('email'),
                Tables\Columns\TextInputColumn::make('phone_no'),
                Tables\Columns\TextInputColumn::make('status'),
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
            'index' => Pages\ManageReservations::route('/'),
        ];
    }
}
