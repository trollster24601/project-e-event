<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Events extends Migration
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
            'eo_id' => [
                'type' => 'INT',
                'unsigned' => true,
                
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'description' => [
                'type' => 'TEXT', 
            ],
            'eo_contact' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'payment_info' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'status' => [
                'type' => 'ENUM("Y","N")',
            ],
            'banner' => [
                'type' => 'BLOB',

            ],
            'location' => [
                'type' => 'TEXT',
                
            ],
            'video_url' => [
                'type' => 'TEXT',
                
            ],
            'ticket_qty' => [
                'type' => 'INT',
            ],
            'date_start' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'date_finish' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'approval_status' => [
                'type' => 'ENUM("Y","N")',
            ],
        ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('events');
    }

    public function down()
    {
        //
        $this->forge->dropTable('events');

    }
}
