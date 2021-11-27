<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WelcomeController extends MY_Controller
{
    public function index()
    {
        $this->blade->view('welcome');
    }
}
