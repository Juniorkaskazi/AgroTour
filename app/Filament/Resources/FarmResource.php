<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FarmResource\Pages;
use App\Filament\Resources\FarmResource\RelationManagers;
use App\Models\amenity;
use App\Models\farm;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;


class FarmResource extends Resource
{
    protected static ?string $model = Farm::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('locaton')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->mask(
                        fn (TextInput\Mask $mask) => $mask
                            ->numeric()
                            ->decimalPlaces(2)
                            ->thousandsSeparator(',')
                    ),
                Forms\Components\TextInput::make('timeline')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_info')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('activities')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description')
                    ->required()->toolbarButtons([
                        'blockquote',
                        'bold',
                        'bulletList',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderdList',
                        'redo',
                        'strike',
                        'underLine',
                        'undo',
                        'edit',
                        'preview',
                    ])
                    ->columnSpanFull(),


                Forms\Components\CheckboxList::make('amenities')
                    ->options(function (DB $query) {
                        $l = [];
                        $amenities = $query::table('amenities')->get();
                        if ($amenities == null) {
                            return [];
                        } else {

                            foreach ($amenities as $amenity) {
                                $l[$amenity->name] = $amenity->name;
                            }
                        }
                        return $l;
                    })
                    ->columns(3),
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('farm_photos')
                    ->preserveFilenames()
                    ->multiple()
                    ->enableReordering()
                    ->responsiveImages(true)
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextInputColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextInputColumn::make('location'),
                Tables\Columns\TextColumn::make('activities'),
                Tables\Columns\TextInputColumn::make('contact_info')->type('number'),
                Tables\Columns\TextInputColumn::make('contact_info'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFarms::route('/'),
            'create' => Pages\CreateFarm::route('/create'),
            'edit' => Pages\EditFarm::route('/{record}/edit'),
        ];
    }
}
