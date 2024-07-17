<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use CodeIgniter\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $model = new CategoryModel();
        $data['categories'] = $model->findAll();
        return view('category/index', $data);
    }

    public function create()
    {
        // Create category logic
    }

    public function edit($id)
    {
        // Edit category logic
    }

    public function delete($id)
    {
        // Delete category logic
    }
}
