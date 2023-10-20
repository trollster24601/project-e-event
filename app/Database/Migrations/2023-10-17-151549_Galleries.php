<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galleries extends Migration
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
            ]);
            $this->forge->addKey('id', true);
            $this->forge->addForeignKey('event_id', 'events', 'id', 'CASCADE', 'CASCADE');
            $this->forge->createTable('galleries');
        
    }

    public function down()
    {
        //
        $this->forge->dropTable('galleries');

    }
}
