<?php

class HomeController extends MY_Controller
{
    public function index()
    {
        $this->blade->view('home');
    }
}
