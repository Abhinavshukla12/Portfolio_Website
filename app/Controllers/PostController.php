<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class PostController extends Controller
{
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->findAll();
        return view('post/index', $data);
    }

    public function create()
    {
        return view('post/create');
    }

    public function edit($id)
    {
        $model = new PostModel();
        $data['post'] = $model->find($id);
        return view('post/edit', $data);
    }

    public function view($id)
    {
        $model = new PostModel();
        $data['post'] = $model->find($id);
        return view('post/view', $data);
    }
}
