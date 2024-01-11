<?php

namespace App\Filament\CafeRestaurant\Resources;

use App\Filament\CafeRestaurant\Resources\EventResource\Pages;
use App\Filament\CafeRestaurant\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
//    protected static ?string $navigationGroup = 'منو';

    protected static ?string $label = 'دورهمی';

    protected static ?string $pluralLabel = 'دورهمی ها';
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('عنوان')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('capacity')
                    ->label('ظرفیت')
                    ->hint('حداکثر تعداد شرکت کنندگان')
                    ->integer()
                    ->regex('/^[0-9]*$/')
                    ->numeric()
                    ->minValue(1),
                Forms\Components\Section::make('زمان')
                    ->label('زمان')
                    ->columns(2)
                    ->schema([
                        Forms\Components\DatePicker::make('date')
                            ->required()
                            ->label('تاریخ')
//                            todo:
//                            ->minDate(now())
                            ->jalali(),
                        Forms\Components\TimePicker::make('from')
                            ->required()
                            ->seconds(false)
                            ->label('از ساعت'),
                        Forms\Components\TimePicker::make('to')
                            ->seconds(false)
                            ->label('تا ساعت'),
                    ]),
                Forms\Components\FileUpload::make('banner_path')
                    ->label('عکس بنر')
                    ->image()
                    ->maxFiles(2024)
                    ->imageEditor()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('short_description')
                    ->label('توضیح کوتاه')
                    ->maxLength(600)
                    ->hint('در چند جمله کوتاه دورهمی خود را معرفی کنید')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('long_description')
                    ->label('توضیحات اصلی')
                    ->maxLength(65535)
                    ->hint('توضیحات کامل در مورد دورهمی')
                    ->helperText('بعد از کلیک بر روی دورهمی در صفحه دورهمی این توضیحات نمایش داده می شود')
                    ->columnSpanFull(),


//                Forms\Components\TextInput::make('cafe_restaurant_id')
//                    ->required()
//                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('عنوان')
                    ->searchable(),
                Tables\Columns\TextColumn::make('capacity')
                    ->label('ظرفیت')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->label('تاریخ')
                    ->jalaliDate()
//                    ->jalali()
                    ->sortable(),
//                Tables\Columns\TextColumn::make('from')
//                    ->label('از ساعت')

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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return 'در حال توسعه';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('cafe_restaurant_id', auth()->user()->cafe_restaurant_id);
    }
}
