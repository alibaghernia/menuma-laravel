<?php

namespace App\Filament\CafeRestaurant\Resources;

use App\Filament\CafeRestaurant\Resources\HallResource\Pages;
use App\Filament\CafeRestaurant\Resources\HallResource\RelationManagers;
use App\Models\Hall;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HallResource extends Resource
{
    protected static ?string $model = Hall::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'فضا ها';

    protected static ?string $label = 'سالن';
    protected static ?string $pluralLabel = 'سالن ها';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->label('کد')
                    ->hint('کد میز میتواند یک شماره یا یک نام باشد')
                    ->maxLength(191),
                Forms\Components\FileUpload::make('banner_image')
                    ->label('عکس')
                    ->maxSize(2024)
                    ->image()
                    ->imageEditor(),
                Forms\Components\Section::make('ظرفیت')
                    ->collapsible()
//                    ->collapsed()
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
//                Forms\Components\Section::make('عکس ها')
//                    ->collapsible()
//                    ->collapsed()
//                    ->columns(3)
//                    ->label('عکس ها')
//                    ->schema([
//                        Forms\Components\FileUpload::make('banner_image')
//                            ->label('عکس اصلی')
//                            ->image()
//                            ->imageEditor()
//                            ->columnSpanFull(),
//                        Forms\Components\FileUpload::make('images')
//                            ->label('دیگر عکس ها')
//                            ->image()
//                            ->maxFiles(5)
//                            ->multiple()
//                            ->imageEditor()
//                            ->imageEditorAspectRatios([
//                                null,
//                                '1:1',
//                                '16:9',
//                            ])
//                            ->columnSpanFull(),
//
//                    ]),

//                Forms\Components\TextInput::make('cafe_restaurant_id'),
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
            'index' => Pages\ListHalls::route('/'),
            'create' => Pages\CreateHall::route('/create'),
            'edit' => Pages\EditHall::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {

        return parent::getEloquentQuery()
            ->where('cafe_restaurant_id', auth()->user()->cafe_restaurant_id);
    }
}
