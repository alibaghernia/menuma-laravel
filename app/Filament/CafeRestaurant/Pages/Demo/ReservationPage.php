<?php

namespace App\Filament\CafeRestaurant\Pages\Demo;

use Filament\Pages\Page;

class ReservationPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.cafe-restaurant.pages.demo.reservation-page';
    protected static ?string $navigationGroup = 'فضا ها';

    protected static ?string $navigationLabel = 'مدیریت رزرو ها';

    protected static ?int $navigationSort = 1;

    protected ?string $heading = 'مدیریت رزرو ها';

    public static function getNavigationBadge(): ?string
    {
        return 'به زودی';
    }
}
