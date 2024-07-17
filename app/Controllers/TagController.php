<?php

namespace App\Controllers;

use App\Models\TagModel;
use CodeIgniter\Controller;

class TagController extends Controller
{
    public function index()
    {
        $model = new TagModel();
        $data['tags'] = $model->findAll();
        return view('tag/index', $data);
    }

    public function create()
    {
        // Create tag logic
    }

    public function edit($id)
    {
        // Edit tag logic
    }

    public function delete($id)
    {
        // Delete tag logic
    }
}
