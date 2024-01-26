<?php

namespace App\Filament\CafeRestaurant\Resources;

use App\Filament\CafeRestaurant\Resources\ConditionalDiscountResource\Pages;
use App\Filament\CafeRestaurant\Resources\ConditionalDiscountResource\RelationManagers;
use App\Models\ConditionalDiscount;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\HtmlString;

class ConditionalDiscountResource extends Resource
{
    protected static ?string $model = ConditionalDiscount::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    //    protected static ?string $navigationGroup = 'منو';

    protected static ?string $label = 'تخفیف شرطی';

    protected static ?string $pluralLabel = 'تخفیف های شرطی';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Placeholder::make('created')
                    ->label('راهنما')
                    ->content(new HtmlString("
                    در این بخش میتواند تخفیف هایی که با شرایط خاصی به مشتریانتان تعلق میگیرد را تعریف کنید.
                    <br>
                    برای مثال تخفیف 30 درصدی برای دانشجویان در روز های شنبه و یکشنه.
                    <br>
                    اگر تخفیفی بر روی ایتمی به طور کلی و برای همه مشتریان وجود دارد نباید اینجا تعریف شود.
                    "))
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('title')
                    ->label('عنوان')
                    ->helperText('مثلا: 30 درصد تخفیف برای دانشجویان روزهای شنبه و یکشنبه')
                    ->hint('به طور کلی و کوتاه شرایط تخفیف را بنویسید')
                    ->required()
                    ->maxLength(191),
                Forms\Components\Textarea::make('description')
                    ->label('توضیحات بیشتر')
                    ->helperText('مثلا: حتما کارت دانشجویی همراهتون باشه')
                    ->hint('اگر توضیحات بیشتری وجود دارد اینجا بنویسید')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('عنوان')
                    ->searchable(),

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
            'index' => Pages\ListConditionalDiscounts::route('/'),
            'create' => Pages\CreateConditionalDiscount::route('/create'),
            'edit' => Pages\EditConditionalDiscount::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('cafe_restaurant_id', auth()->user()->cafe_restaurant_id);
    }
}
