<?php

namespace App\Filament\CafeRestaurant\Resources;

use App\Filament\CafeRestaurant\Resources\CategoryResource\Pages;
use App\Filament\CafeRestaurant\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;

class CategoryResource extends Resource
{
    use Translatable;

    protected static ?string $model = Category::class;
    protected static ?string $navigationGroup = 'منو';

    protected static ?string $label = 'دسته بندی';
    protected static ?string $pluralLabel = 'دسته بندی ها';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('نام')
                    ->required()
                    ->maxLength(191),

                Forms\Components\FileUpload::make('background_path')
                    ->label('عکس')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '1:1',
                    ])
                    ->maxSize(2024)
                    ->helperText('امکان آپلود عکس تا حجم 2 مگابایت وجود دارد ولی برای سریع تر بودن لود اطلاعات کافه عکس با حجم بیش از 500 کیلو بایت آپلود نکنید.'),

                Forms\Components\Toggle::make('is_hidden')
                    ->label('مخفی کردن')
                    ->helperText('با فعال کردن این گزینه این دسته بندی و آیتم های درونش در منو نمایش داده نخواهد شد.'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('background_path')
                    ->label('عکس')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('name')
                    ->label('نام')
                    ->searchable(),
            ])
            ->reorderable('order_column')
            ->filters([
                Tables\Filters\Filter::make('is_hidden')
                    ->label('فقط مخفی ها')
                    ->query(fn(Builder $query): Builder => $query->where('is_hidden', true)),
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
            RelationManagers\ItemsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }

//    public static function getEloquentQuery(): Builder
//    {
//        $query = static::getModel()::query();
//        $user = auth()->user();
//
//
//         $query->where('cafe_restaurant_id', $user->cafe_restaurant_id);
//         return $query;
////         dd($query->toRawSql());
//    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('cafe_restaurant_id', auth()->user()->cafe_restaurant_id)
            ->orderBy('order_column');
    }
}
