<?php

namespace App\Providers;

use App\Livewire\DatabaseNotifications;
use App\Livewire\Notifications;
use App\Notifications\CallWaiterNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Filament\Notifications\Notification as BaseNotification;
use Filament\Notifications\Livewire\Notifications as BaseNotifications;
use Livewire\Livewire;
use Filament\Notifications\Livewire\DatabaseNotifications as BaseDatabaseNotifications;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        Schema::defaultStringLength(191);
//

//        Livewire::component('database-notifications', DatabaseNotifications::class);
//        $this->app->bind(BaseDatabaseNotifications::class, DatabaseNotifications::class);
//
        $this->app->bind(BaseNotification::class, CallWaiterNotification::class);
        $this->app->bind(BaseNotifications::class, Notifications::class);
        Livewire::component('notifications', Notifications::class);
//        dd(DatabaseNotifications::databaseNotifications());

        Blade::if('maindomain', function () {
            return is_main_domain();
        });

        Blade::if('notmaindomain', function () {
            return !is_main_domain();
        });
    }
}
