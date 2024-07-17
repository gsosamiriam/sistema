<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'usu_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'usu_username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'usu_email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'usu_password' => array(
                'type' => 'TEXT'
            ),
            'usu_status'  => array(
                'type' => 'INT',
                'constraint' => 1,
                'unsigned' => TRUE,
            ), 
            'usu_created_at'  => array(
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ),
            'usu_created_by'  => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'null' => TRUE,
            ), 
            'usu_updated_at'  => array(
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ),
            'usu_updated_by'  => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'null' => TRUE,
            ), 
            'usu_canceled_at'  => array(
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ),
            'usu_canceled_by'  => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'null' => TRUE,
            )
        ));
        $this->forge->addKey('usu_id', TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
