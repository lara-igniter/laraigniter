<?php

use Elegant\Routing\Contracts\MiddlewareInterface;

class AuthMiddleware implements MiddlewareInterface
{
    /**
     * Middleware entry point
     *
     * @return void
     */
    public function run($args)
    {
        if (!app()->ion_auth->logged_in()) {
            redirect(route('login'), 'refresh');
        }
    }
}
