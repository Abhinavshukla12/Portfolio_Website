<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        $model = new ProjectModel();
        $data = [
            'title' => 'Projects',
            'projects' => $model->findAll()
        ];
        return view('projects', $data);
    }
}
