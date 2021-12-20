<?php

use Elegant\Foundation\Hooks\Hook;

$hook = Hook::autoload([
    'providers' => [

        /*
         * Laraigniter Framework Service Providers...
         */
        Elegant\Routing\RouteServiceProvider::class,
        Elegant\Foundation\Exceptions\WhoopsServiceProvider::class,
        Elegant\View\ViewServiceProvider::class,


        /*
         * Application Service Providers...
         */
        App\Providers\ViewServiceProvider::class
    ],

    'aliases' => [
        'blade' => Elegant\Support\Facades\Blade::class,
    ]
]);
