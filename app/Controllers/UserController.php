<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function register()
    {
        return view('user/register');
    }

    public function login()
    {
        return view('user/login');
    }

    public function profile($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('user/profile', $data);
    }
}
