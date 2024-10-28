<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Character extends Migration
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

           'id_user' => [
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,

           ],
           'name' => [
               'type' => 'VARCHAR',
               'constraint' => '100',

           ],
           'strength' => [
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
           ],
           'constitution' => [
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
           ],
           'agility' => [
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
           ],
           'experience' => [
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
           ],
           'level' => [
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
               'default' =>1
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
       $this->forge->addForeignKey('id_user', 'user', 'id');
       $this->forge->createTable('character');
    }

    public function down()
    {
        $this->forge->dropTable('character');
    }
}
