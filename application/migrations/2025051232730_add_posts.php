<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_posts extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => FALSE
            ),
            'description' => array(
                'type' => 'TEXT',
                'null' => FALSE
            )
        ));

        $this->dbforge->add_key('id', TRUE); // Primary Key
        $this->dbforge->create_table('posts', TRUE); // TRUE = don't fail if table exists
    }

    public function down()
    {
        $this->dbforge->drop_table('posts', TRUE);
    }
}
