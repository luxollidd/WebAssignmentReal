<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}

class RedirectIfAuthenticated
    {
        public function handle($request, Closure $next, $guard = null)
        {
            if ($guard == "hod" && Auth::guard($guard)->check()) {
                return redirect('/hod');
            }
            if ($guard == "student" && Auth::guard($guard)->check()) {
                return redirect('/student');
            }
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }

            return $next($request);
        }
    }
