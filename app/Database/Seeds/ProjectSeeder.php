<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Project One',
                'description' => 'Description for project one.',
                'link' => 'https://example.com/project-one',
            ],
            [
                'title' => 'Project Two',
                'description' => 'Description for project two.',
                'link' => 'https://example.com/project-two',
            ],
            [
                'title' => 'Project Three',
                'description' => 'Description for project three.',
                'link' => 'https://example.com/project-three',
            ],
        ];

        foreach ($data as $project) {
            $this->db->table('projects')->insert($project);
        }
    }
}
