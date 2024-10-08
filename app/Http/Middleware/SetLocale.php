<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Log::info('SetLocale Middleware called');

        if (session()->has('app_locale')) {
            // Log::info('Current locale:', [session('app_locale')]);
            App::setLocale(session('app_locale'));
        } else {
            App::setLocale('id'); // default
        }

        return $next($request);
    }
}
