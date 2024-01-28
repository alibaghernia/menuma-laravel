<?php

namespace App\Filament\CafeRestaurant\Resources;

use App\Filament\CafeRestaurant\Resources\CafeRestaurantCustomerResource\Pages;
use App\Filament\CafeRestaurant\Resources\CafeRestaurantCustomerResource\RelationManagers;
use App\Models\CafeRestaurantCustomer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CafeRestaurantCustomerResource extends Resource
{
    protected static ?string $model = CafeRestaurantCustomer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'باشگاه مشتریان';

    protected static ?string $label = 'مشتری';
    protected static ?string $pluralLabel = 'مشتریان';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('نام')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('family')
                    ->label('نام خانوادگی')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('mobile')
                    ->label('شماره موبایل')
                    ->startsWith('09')
                    ->required()
                    ->maxLength(191),
                Forms\Components\DatePicker::make('birth_date')
                    ->label('تاریخ تولد')
                    ->jalali(),
                Forms\Components\Select::make('gender')
                    ->label('جنسیت')
//                    todo: ref
                    ->options([
                        'man' => 'مرد',
                        'woman' => 'زن',
                    ]),
                Forms\Components\Textarea::make('description')
                    ->label('یادداشت')
                    ->helperText('این توضیحات فقط برای شما نمایش داده خواهد شد و مشتری ان را نمی بیند'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name')
                    ->label('نام')
                    ->searchable(),
                Tables\Columns\TextColumn::make('family')
                    ->label('نام خانوادگی')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile')
                    ->label('شماره موبایل')
                    ->searchable()
                    ->toggleable(),
//                Tables\Columns\TextColumn::make('birth_date')
//                    ->label('تاریخ تولد')
//                    ->date()
//                    ->sortable(),
//                Tables\Columns\TextColumn::make('gender')
//                    ->label('جنسیت')
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
            'index' => Pages\ListCafeRestaurantCustomers::route('/'),
            'create' => Pages\CreateCafeRestaurantCustomer::route('/create'),
            'edit' => Pages\EditCafeRestaurantCustomer::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('cafe_restaurant_id', auth()->user()->cafe_restaurant_id);
    }
}
