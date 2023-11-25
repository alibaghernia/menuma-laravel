<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsSuperadmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        dd(User::first()->hasRole(Role::SUPERADMIN));
//        dd('hi');
        if (auth()->user()->hasRole(Role::SUPERADMIN)) {
            return $next($request);

        }
        abort(404);
//        dd(auth()->user());
    }
}
