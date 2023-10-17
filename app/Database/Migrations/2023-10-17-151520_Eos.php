<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Eos extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
        'id' => [
            'type' => 'INT',
            'unsigned' => true,
            'auto_increment' => true,
        ],
        'user_id' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            
        ],
        'status' => [
            'type' => 'ENUM("approved","waiting","declined")',
            
        ],
        'contact' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
            
        ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('eos');
    }

    public function down()
    {
        //
        $this->forge->dropTable('eos');
    }
}
