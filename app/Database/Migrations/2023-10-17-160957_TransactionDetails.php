<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionDetails extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'unique_code' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'transaction_id' => [
                'type' => 'INT',
                'unsigned' => true,
               
            ],
            'buyer_name' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'attend_status' => [
                'type' => 'ENUM("present","absent")',
                
            ],
            ]);
            $this->forge->addKey('unique_code', true);
            $this->forge->addForeignKey('transaction_id', 'transactions', 'id', 'CASCADE', 'CASCADE');
            $this->forge->createTable('transaction_details');
        
    }

    public function down()
    {
        //
        $this->forge->dropTable('transaction_details');

    }
}
