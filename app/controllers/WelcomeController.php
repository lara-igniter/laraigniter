<?php

class WelcomeController extends MY_Controller
{
    public function index()
    {
        $this->blade->view('welcome');
    }
}
