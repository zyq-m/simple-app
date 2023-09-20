<?php

namespace App\Controllers;

use CodeIgniter\Shield\Controllers\LoginController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('user/welcome_message');
    }

    public function login(): string
    {
        $data['title'] = 'Login';
        return view('login_view');
    }

    public function register(): string
    {
        $data['title'] = 'Register';
        return view('admin/register_view');
    }

    public function home(): string
    {
        $data['title'] = 'Dashboard';

        return view('admin/home_view');
    }

    public function viewAddUser(): string
    {
        $data['title'] = 'Add User';
        return view('admin/add_user_view');
    }
}
