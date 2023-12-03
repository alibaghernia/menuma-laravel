<?php

namespace App\Filament\Superadmin\Resources;

use App\Filament\Superadmin\Resources\CafeRestaurantResource\Pages;
use App\Filament\Superadmin\Resources\CafeRestaurantResource\RelationManagers;
use App\Models\CafeRestaurant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CafeRestaurantResource extends Resource
{
    protected static ?string $model = CafeRestaurant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(191),
                Forms\Components\FileUpload::make('logo_path')
                    ->required()
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '1:1',
                    ]),
                Forms\Components\FileUpload::make('banner_path')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '1:1',
                    ]),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->default('active')
                    ->maxLength(191),
                Forms\Components\Fieldset::make('social_media')
                    ->schema([
                        Forms\Components\TextInput::make('instagram')
                            ->label('ایستاگرام')
                            ->url(),
                        Forms\Components\TextInput::make('telegram')
                            ->label('تلگرام')
                            ->url(),
                        Forms\Components\TextInput::make('twitter')
                            ->label('توییتر X')
                            ->url(),
                        Forms\Components\TextInput::make('whatsapp')
                            ->label('واتساپ')
                            ->url(),

                    ]),
//todo
//                Forms\Components\TimePicker::make('working_hour1')
//                    ->seconds(false),
//                Forms\Components\TimePicker::make('working_hour2')
//                    ->seconds(false) ,

                Forms\Components\Textarea::make('address')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('location_lat')
                    ->maxLength(191),
                Forms\Components\TextInput::make('location_long')
                    ->maxLength(191),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo_path')
                    ->circular()
                    ->toggleable(),
                Tables\Columns\ImageColumn::make('banner_path')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
//                Tables\Columns\TextColumn::make('location_lat'),
//                Tables\Columns\TextColumn::make('location_long'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

//                Action::make('delete')
//                    ->requiresConfirmation()
//                    ->action(fn() => dd('ssss'))
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
            'index' => Pages\ListCafeRestaurants::route('/'),
            'create' => Pages\CreateCafeRestaurant::route('/create'),
            'edit' => Pages\EditCafeRestaurant::route('/{record}/edit'),
        ];
    }
}
