<?php

namespace App\Controllers;

use App\Models\CommentModel;
use CodeIgniter\Controller;

class CommentController extends Controller
{
    public function add($postId)
    {
        // Add comment logic
    }

    public function list($postId)
    {
        $model = new CommentModel();
        $data['comments'] = $model->getCommentsByPost($postId);
        return view('comment/list', $data);
    }
}
