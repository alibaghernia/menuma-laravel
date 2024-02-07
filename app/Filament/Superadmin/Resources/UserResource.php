<?php

namespace App\Filament\Superadmin\Resources;

use App\Filament\Superadmin\Resources\UserResource\Pages;
use App\Filament\Superadmin\Resources\UserResource\RelationManagers;
use App\Models\CafeRestaurant;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('family')
                    ->maxLength(191),
                Forms\Components\TextInput::make('mobile_number')
                    ->required()
                    ->length(11),
//                Forms\Components\TextInput::make('password')
//                    ->password()
//                    ->required()
//                    ->maxLength(191),
                Forms\Components\Select::make('cafe_restaurant_id')
                    ->searchable()
//                    ->searchable()
//                    ->relationship('cafeRestaurant', 'name'),
                    ->options(CafeRestaurant::all()->pluck('name', 'id'))
                ,
                Forms\Components\TextInput::make('password')
                    ->password(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('family')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('cafeRestaurant.name')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('login_as')
                    ->action(function (User $user) {
//                        dump(
//                            session()->all(),
//                            auth()->user(),
//                            auth()->loginUsingId(2),
//                            session()->all(),
//                            session()->regenerate(),
//                            session()->all(),
//                            auth()->user(),
//
//                        );
                        return redirect()->to('/superadmin/login-as/' . $user->id);
                    }),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
