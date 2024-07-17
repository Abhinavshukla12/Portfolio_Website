<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['post_id', 'user_id', 'comment', 'created_at'];
    protected $useTimestamps = true;

    public function getCommentsByPost($postId)
    {
        return $this->where('post_id', $postId)->findAll();
    }
}
