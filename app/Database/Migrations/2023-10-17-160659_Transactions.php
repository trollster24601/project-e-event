<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
{
    public function up()
    {
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
            'ticket_id' => [
                'type' => 'INT',
                'unsigned' => true,
                
            ],
            'date' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'payment_status' => [
                'type' => 'ENUM("paid","unpaid")',
                
            ],
            'total' => [
                'type' => 'INT',
            ],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
            $this->forge->addForeignKey('ticket_id', 'tickets', 'id', 'CASCADE', 'CASCADE');
            $this->forge->createTable('transactions');
        
    }

    public function down()
    {
        //
        $this->forge->dropTable('transactions');

    }
}
