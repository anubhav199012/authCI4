<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => true
            ],
            'name' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'package' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'gender' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
                'null'=>true,
			],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'mobile' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
                'null'=>true,
			],
            'referral_link' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
            'address' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
                'null'=>true,
			],
            'role_type' => [
				'type' => 'TINYINT',
				'constraint' => '1',
                'default' => 1,
                'null' => FALSE,
                'comment'=>'0:Admin, 1:User'
			],
            'country' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
                'null'=>true,
			],  
            'wallet' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => FALSE,
                'default' => 0.00
			],   
            'referred_by' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
                'null'=>true,
			], 
            'is_delete' => [
				'type' => 'TINYINT',
				'constraint' => '1',
                'default' => 0,
                'null' => FALSE,
                'comment'=> '0:Not Deleted, 1:Deleted'
			],
			'status' => [
				'type' => 'TINYINT',
				'constraint' => '1',
                'default' => 2,
                'null' => FALSE,
                'comment'=> '1-active user ,2-inactive user ,3- delete user	'
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
        $this->forge->dropTable('users');
    }
}
