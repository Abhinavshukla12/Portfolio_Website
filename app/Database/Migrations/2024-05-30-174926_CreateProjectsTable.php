<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true
        ],
        'title' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'description' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'link' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true,
        ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('projects');
}

public function down()
{
    $this->forge->dropTable('projects');
}

}
