<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global HTTP middleware stack
    ];

    protected $middlewareGroups = [
        'web' => [\App\Http\Middleware\SetLocale::class],

        'api' => [
            // Middleware untuk grup API
        ],
    ];

    protected $routeMiddleware = [
        // Middleware yang bisa dipanggil secara terpisah
    ];
}
