<?php

namespace App\Filament\CafeRestaurant\Resources;

use App\Filament\CafeRestaurant\Resources\TableResource\Pages;
use App\Filament\CafeRestaurant\Resources\TableResource\RelationManagers;
use App\Models\Hall;
use App\Models\Table as TableModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class TableResource extends Resource
{
    protected static ?string $model = TableModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'فضا ها';

    protected static ?string $label = 'میز';
    protected static ?string $pluralLabel = 'میز ها';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->label('کد')
                    ->hint('کد میز میتواند یک شماره یا یک نام باشد')
                    ->maxLength(191),
                Forms\Components\Select::make('hall_id')
                    ->label('سالن')
                    ->searchable()
                    ->options(
                        Hall::where('cafe_restaurant_id', auth()->user()->cafe_restaurant_id)
                            ->pluck('code', 'id')
                    ),
                Forms\Components\FileUpload::make('banner_image')
                    ->label('عکس')
                    ->maxSize(2024)
                    ->image()
                    ->imageEditor()
                    ->columnSpanFull(),
                Forms\Components\Section::make('ظرفیت')
                    ->collapsible()
                    ->columns(2)
                    ->label('ظرفیت سالن')
                    ->schema([
                        Forms\Components\TextInput::make('normal_capacity')
                            ->label('ظرفیت عادی')
                            ->integer()
                            ->minValue(1),
                        Forms\Components\TextInput::make('max_capacity')
                            ->label('حداکثر ظرفیت')
                            ->integer()
                            ->minValue(1),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('banner_image')
                    ->label('عکس')
                    ->circular()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('code')
                    ->label('کد')
                    ->searchable(),
                Tables\Columns\TextColumn::make('normal_capacity')
                    ->label('ظرفیت عادی')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('max_capacity')
                    ->label('حداکثر ظرفیت')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),


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
            'index' => Pages\ListTables::route('/'),
            'create' => Pages\CreateTable::route('/create'),
            'edit' => Pages\EditTable::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {

        return parent::getEloquentQuery()
            ->where('cafe_restaurant_id', auth()->user()->cafe_restaurant_id);
    }
}
