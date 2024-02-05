<?php

namespace App\Filament\CafeRestaurant\Resources;

use App\Filament\CafeRestaurant\Resources\ItemResource\Pages;
use App\Filament\CafeRestaurant\Resources\ItemResource\RelationManagers;
use App\Models\Category;
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
                Forms\Components\Select::make('category_id')
                    ->label('دسته بندی')
                    ->required()
                    ->searchable()
                    ->options(Category::where('cafe_restaurant_id', auth()->user()->cafe_restaurant_id)
                        ->pluck('name', 'id')
                    )
                    ->default(request()->cid ?? null),
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
                    ->hint('برای نمایش بهتر، عکس با نسبت 1:1 بارگذاری کنید'),
                Forms\Components\Textarea::make('description')
                    ->label('توضیحات')
                    ->maxLength(500)
                    ->columnSpanFull(),

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
                            ->integer()
                            ->regex('/^[0-9]*$/')
                            ->minValue(0),
                    ]),
                Forms\Components\Section::make('تگ ها')
                    ->schema([
                        Forms\Components\CheckboxList::make('tags')
//                            ->searchable()
                            ->label('برچسب ها')
                            ->options([
                                'new' => 'جدید',
                                'day_offer' => 'پیشنهاد روز',
                                'sold_out' => 'اتمام موجودی',
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
                    ->label('نام')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('دسته بندی'),
//                Tables\Columns\TextColumn::make('cafe_restaurant_id')
//                    ->numeric()
//                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('is_sold_out')
                    ->label('فقط تمام شده ها')
                    ->query(fn(Builder $query): Builder => $query->whereJsonContains('tags', 'sold_out'))
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
