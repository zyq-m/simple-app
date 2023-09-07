<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function login(): string
    {
        $data['title'] = 'Login';
        return view('login_view');
    }

    public function register(): string
    {
        $data['title'] = 'Register';
        return view('register_view');
    }

    public function home(): string
    {
        $data['title'] = 'Dashboard';
        return view('home_view');
    }

    public function viewAddUser(): string
    {
        $data['title'] = 'Add User';
        return view('add_user_view');
    }
}
