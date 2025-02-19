<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventAuthenticatedRedirect
{
    public function handle(Request $request, Closure $next)
    {
        // If the user is authenticated and tries to access login page, prevent redirect
        if (Auth::check() && $request->is('login')) {
            return $next($request);  // Allow them to stay on the login page
        }

        return $next($request); // Otherwise, proceed with the request
    }
}
