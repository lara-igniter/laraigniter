<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends MY_Controller
{
    public function index()
    {
        $this->blade->view('home');
    }
}