<?php

use Elegant\Foundation\Hooks;

$hook = Hooks::autoload([
    'providers' => [

        /*
         * Laraigniter Framework Service Providers...
         */
        Elegant\Foundation\AppServiceProvider::class,
        Elegant\Routing\RouteServiceProvider::class,
        Elegant\Foundation\Exceptions\WhoopsServiceProvider::class,
        Elegant\View\ViewServiceProvider::class,


        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\ViewServiceProvider::class,
    ],

    'aliases' => [
        'Blade' => Elegant\Support\Facades\Blade::class,
        'View' => Elegant\Support\Facades\View::class,
    ]
]);
