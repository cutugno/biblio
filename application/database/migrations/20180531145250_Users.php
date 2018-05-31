<?php

class Migration_Users extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => 45,
                'unique' => TRUE
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE
            ),
            'created' => array(
                'type' => 'DATETIME'
            ),
            'last_login' => array(
                'type' => 'DATETIME',
                'null' => TRUE
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down() {
        $this->dbforge->drop_table('users');
    }

}
