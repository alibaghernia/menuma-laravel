<?php

namespace App\Filament\Superadmin\Resources;

use App\Filament\Superadmin\Resources\ItemResource\Pages;
use App\Filament\Superadmin\Resources\ItemResource\RelationManagers;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(191),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image_path')
                    ->image(),

                Forms\Components\Repeater::make('prices')
                    ->label('قیمت ها')
                    ->minItems(1)
                    ->maxItems(3)
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('عنوان')
                            ->string(),
                        Forms\Components\TextInput::make('price')
                            ->label('قیمت')
                            ->required()
                            ->numeric()
                            ->minValue(0),
                    ]),
                Forms\Components\Select::make('category_id')
                    ->required()
                    ->relationship('category', 'name'),
                Forms\Components\Section::make('تگ ها')
                    ->collapsible()
                    ->schema([
                        Forms\Components\CheckboxList::make('tags')
                            ->searchable()
                            ->label('تگ ها')
                            ->options([
                                'new' => 'جدید',
                                'special' => 'ویژه',
                                'sold_out' => 'اتمام موجوددی',
                            ])->columns(3)
                            ->columnSpan('full'),
                    ]),
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
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_path'),
                Tables\Columns\TextColumn::make('category_id')
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}
