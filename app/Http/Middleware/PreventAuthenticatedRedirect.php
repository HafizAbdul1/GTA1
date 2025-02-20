<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventAuthenticatedRedirect
{
   // app/Http/Middleware/RedirectIfAuthenticated.php

public function handle($request, Closure $next, ...$guards)
{
   foreach ($guards as $guard) {
       if (Auth::guard($guard)->check()) {
           return redirect('/login'); // Redirect authenticated users to home
       }
   }

   return $next($request); // Allow guests to proceed
}

}
