<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/'); // Redirect if not authenticated
        }

        if (!in_array(Auth::user()->role, $roles)) {
            return abort(403); // Forbidden if the user doesn't have the required role
        }

        return $next($request);
    }
}
