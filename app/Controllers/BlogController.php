<?php

namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $model = new BlogModel();
        $data = [
            'title' => 'Blog',
            'posts' => $model->findAll()
        ];
        return view('blog', $data);
    }
}
