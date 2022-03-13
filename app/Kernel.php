<?php

namespace App;

class Kernel
{
    public static $middleware = [
        \Elegant\Routing\Middleware\RouteAjaxMiddleware::class,
    ];

    public static $middlewareGroups = [
        'web' => [

        ],

        'api' => [
            'ajax',
        ],
    ];

    public static $routeMiddleware = [
        'auth' => \App\middleware\AuthMiddleware::class,
        'ajax' => \Elegant\Routing\Middleware\RouteAjaxMiddleware::class,
    ];
}
