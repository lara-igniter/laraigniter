<?php

use App\requests\auth\LoginRequest;

// defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function preMiddleware()
    {
        if($this->ion_auth->logged_in()) {
            redirect(route('home'), 'refresh');
        }
    }

    public function index() {
        $this->blade->view('auth.login');
    }

    public function login()
    {
        $url = substr($this->session->userdata('prev_url'), 1);

        $request = new LoginRequest();

        if(! $request->validated()) {
            $this->index();
        } else {

            $remember = (bool) $this->input->post('remember');
            $login = $this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember);

            if($login) {
                $this->session->set_userdata('logged_user', $this->ion_auth->user()->row());

                if (!empty($url)) {
                    redirect($url, 'refresh');
                } else {
                    redirect(route('home'));
                }
            } else {
                route_redirect('login', [], ['warning' => $this->ion_auth->errors()]);
            }
        }
    }
}
