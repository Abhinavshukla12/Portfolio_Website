<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
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
        'body' => [
            'type' => 'TEXT',
            'null' => true,
        ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('posts');
}

public function down()
{
    $this->forge->dropTable('posts');
}

}
