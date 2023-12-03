<?php

namespace App\Filament\CafeRestaurant\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';

//    create
    public function form(Form $form): Form
    {
        return $form
//            ->schema([
//                Forms\Components\TextInput::make('name')
//                    ->required()
//                    ->maxLength(255),
//            ]);

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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->reorderable('order_column')
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
}
