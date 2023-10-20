<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reports extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'event_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'attendance_qty' => [
                'type' => 'INT',
            ],
            'event_name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'date_start' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'date_finish' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'revenue' => [
                'type' => 'INT',
            ],
            'buyer_qty' => [
                'type' => 'INT',
            ],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->addForeignKey('event_id', 'events', 'id', 'CASCADE', 'CASCADE');
            $this->forge->createTable('reports');
        
    }

    public function down()
    {
        //
        $this->forge->dropTable('reports');
    }
}
