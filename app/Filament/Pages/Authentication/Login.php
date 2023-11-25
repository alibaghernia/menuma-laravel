<?php

namespace App\Filament\Pages\Authentication;

use Filament\Pages\Page;

class Login extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.authentication.login';
}
