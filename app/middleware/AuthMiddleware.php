<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthMiddleware implements Luthier\MiddlewareInterface
{
    /**
     * Middleware entry point
     *
     * @return void
     */
    public function run($args)
    {
        if (!ci()->ion_auth->logged_in()) {
            redirect(route('login'), 'refresh');
        }
    }
}
