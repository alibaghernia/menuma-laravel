<?php

namespace App\Filament\CafeRestaurant\Resources;

use App\Filament\CafeRestaurant\Resources\ItemResource\Pages;
use App\Filament\CafeRestaurant\Resources\ItemResource\RelationManagers;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'منو';

    protected static ?string $label = 'آیتم';
    protected static ?string $pluralLabel = 'آیتم ها';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('name')
                    ->label('نام')
                    ->required()
                    ->maxLength(191),
                Forms\Components\FileUpload::make('image_path')
                    ->image()
                    ->label('عکس')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '1:1',
                    ])
                    ->maxSize(2024)
                    ->helperText('امکان آپلود عکس تا حجم 2 مگابایت وجود دارد ولی برای سریع تر بودن لود اطلاعات کافه عکس با حجم بیش از 500 کیلو بایت آپلود نکنید.')
                    ->hint('برای نمایش بهتر، عکس با نسبت 1:1 بازگذاری کنید'),
                Forms\Components\Textarea::make('description')
                    ->label('توضیحات')
                    ->maxLength(500)
                    ->columnSpanFull(),
                Forms\Components\Select::make('category_id')
//                    todo
//                    ->searchable()
                    ->label('دسته بندی')
                    ->required()
                    ->relationship('category', 'name'),
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
                Forms\Components\Section::make('تگ ها')
                    ->schema([
                        Forms\Components\CheckboxList::make('tags')
//                            ->searchable()
                            ->label('تگ ها')
                            ->options([
//                                'new' => 'جدید',
                                'special' => 'ویژه',
//                                'sold_out' => 'اتمام موجوددی',
                            ])->columns(3)
                            ->columnSpan('full'),
                    ]),


//                Forms\Components\TextInput::make('cafe_restaurant_id')
//                    ->required()
//                    ->numeric(),
//

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\ImageColumn::make('image_path')
                    ->label('عکس')
                    ->toggleable()
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('دسته بندی'),
//                Tables\Columns\TextColumn::make('cafe_restaurant_id')
//                    ->numeric()
//                    ->sortable(),
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

    public static function getEloquentQuery(): Builder
    {

        return parent::getEloquentQuery()
            ->where('cafe_restaurant_id', auth()->user()->cafe_restaurant_id);
    }
}
