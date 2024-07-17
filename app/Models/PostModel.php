<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'title', 'content', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function getPostsByUser($userId)
    {
        return $this->where('user_id', $userId)->findAll();
    }
}