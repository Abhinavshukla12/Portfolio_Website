<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->getBlogs();
        echo view('blog/index', $data);
    }

    public function view($id)
    {
        $model = new BlogModel();
        $data['blog'] = $model->getBlogById($id);

        if (empty($data['blog'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Blog post not found');
        }

        echo view('blog/view', $data);
    }
}
