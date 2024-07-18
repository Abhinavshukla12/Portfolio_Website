<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'author', 'created_at'];

    public function getBlogs()
    {
        return $this->findAll();
    }

    public function getBlogById($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
