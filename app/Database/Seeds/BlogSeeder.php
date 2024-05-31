<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Blog Post One',
                'body' => 'Content for blog post one.',
            ],
            [
                'title' => 'Blog Post Two',
                'body' => 'Content for blog post two.',
            ],
            [
                'title' => 'Blog Post Three',
                'body' => 'Content for blog post three.',
            ],
        ];

        foreach ($data as $post) {
            $this->db->table('posts')->insert($post);
        }
    }
}
