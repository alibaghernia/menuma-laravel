<?php

namespace App\Providers;

use App\Services\Business\BusinessService;
use App\Services\Business\BusinessServiceInterface;
use Illuminate\Support\ServiceProvider;

class DIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(
            BusinessServiceInterface::class,
            BusinessService::class
        );
    }
}
