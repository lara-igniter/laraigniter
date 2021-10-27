<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutController extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function logout()
    {
        $this->ion_auth->logout();

        redirect('/');
    }

}
