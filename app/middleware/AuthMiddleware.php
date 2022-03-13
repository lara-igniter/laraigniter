<?php

namespace App\middleware;

use Elegant\Routing\Contracts\MiddlewareInterface;
use Exception;

class AuthMiddleware implements MiddlewareInterface
{
    /**
     * Middleware entry point
     *
     * @return void
     * @throws Exception
     */
    public function run($args)
    {
        if (!app()->ion_auth->logged_in()) {
            redirect(route('login'), 'refresh');
        }
    }
}
