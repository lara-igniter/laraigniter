<?php

use Elegant\Foundation\Hooks\Hook;

$hook = Hook::autoload([
    'whoops' => Elegant\Foundation\Hooks\Whoops::class,
    'route' => Elegant\Foundation\Hooks\Routing::class,
    'view' => Elegant\Foundation\Hooks\View::class
]);
