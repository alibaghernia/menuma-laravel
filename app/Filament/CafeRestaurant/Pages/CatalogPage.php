<?php

namespace App\Filament\CafeRestaurant\Pages;

use Filament\Pages\Page;
use Filament\Pages\SubNavigationPosition;

class CatalogPage extends Page
{
    protected static ?string $navigationLabel = "کاتالوگ";
    protected static ?int $navigationSort = 9;
    protected static ?string $navigationGroup='منوما';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.cafe-restaurant.pages.catalog-page';

    public function mount()
    {
        $this->redirect('https://menuma.online/catalog');
    }
}
