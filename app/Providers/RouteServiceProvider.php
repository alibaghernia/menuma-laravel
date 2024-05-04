<?php

namespace App\Providers;

use App\Http\Middleware\SetLocale;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group([
                    base_path('routes/api.php'),
                    base_path('routes/api/api.php'),
                ]);

//            Web
//                todo
            Route::middleware([
                'web',
            ])->group(function () {

                Route::name('all-domain.')
                    ->group(base_path('routes/web/all_domain.php'));

                Route::domain(config('app.domains.main'))
                    ->name('main-domain.')
                    ->group(base_path('routes/web/main_domain.php'));

                Route::domain(config('app.domains.panel'))
                    ->name('panel-domain.')
                    ->group(base_path('routes/web/panel_domain.php'));

                Route::name('business-domain.')
                    ->middleware([
                        SetLocale::class,
                    ])
                    ->group(base_path('routes/web/business_domain.php'));

            });


//            Route::middleware('web')
//                ->group([
//                    base_path('routes/web/business_domain.php'),
//                    base_path('routes/web/panel_domain.php'),
//                    base_path('routes/web/main_domain.php'),
////                    base_path('routes/web.php'),
//                ]);


//            Route::middleware('web')
//                ->group(base_path('routes/web/panel_domain.php'));
//            Route::middleware('web')
//                ->group(base_path('routes/web.php'));

        });
    }
}
