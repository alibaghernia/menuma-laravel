<?php

namespace App\Http\Middleware;

use App\Models\CafeRestaurant;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->get('lang') === 'en') {
            $business = CafeRestaurant::where('domain_address', request()->host())
                ->first();
            if ($business?->enabled_multi_lang) {
                app()->setLocale('en');
            }

        }
        return $next($request);
    }
}
