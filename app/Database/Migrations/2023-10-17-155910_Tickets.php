<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tickets extends Migration
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
            'event_id' => [
                'type' => 'INT',
                'unsigned' => true,
               
            ],
            'image' => [
                'type' => 'BLOB',
            ],
            'ticket_type' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'stock' => [
                'type' => 'INT',
            ],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('tickets');
        
    }

    public function down()
    {
        //
        $this->forge->dropTable('tickets');

    }
}
