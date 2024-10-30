<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Battles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'character1_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,

            ],
            'character2_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,

            ],
            'winner_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,

            ],
            'loser_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('character1_id', 'character', 'id');
        $this->forge->addForeignKey('character2_id', 'character', 'id');
        $this->forge->createTable('battle');
    }

    public function down()
    {
        $this->forge->dropTable('battle');
    }
}
