<?php

namespace App\Filament\Superadmin\Resources;

use App\Filament\Superadmin\Resources\GalleryResource\Pages;
use App\Filament\Superadmin\Resources\GalleryResource\RelationManagers;
use App\Models\CafeRestaurant;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('path')
                    ->required()
                    ->imageEditor()
                    ->confirmSvgEditing(),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535),
                Forms\Components\Toggle::make('is_panorama')
                    ->default(false)
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('w')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('h')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('cafe_restaurant_id')
                    ->searchable()
                    ->options(CafeRestaurant::all()->pluck('name', 'id')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\IconColumn::make('is_panorama')
                    ->boolean(),
                Tables\Columns\TextColumn::make('w')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('h')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cafe_restaurant_id')
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
