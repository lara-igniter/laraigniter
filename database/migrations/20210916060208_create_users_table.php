<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_users_table extends CI_Migration
{
    /**
	 * Name of the table to be used in this migration!
	 *
	 * @var string
	 */
	protected $table = "";


	public function __construct()
	{
        parent::__construct();
        $this->load->dbforge();

        $this->load->config('ion_auth', true);
        $this->table = $this->config->item('tables', 'ion_auth')['users'];
    }

    public function up()
    {
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(['group_id' => ['type' => 'BIGINT', 'unsigned' => TRUE, 'default' => NULL]]);
		$this->dbforge->add_foreign_key(['field' => 'group_id', 'foreign_table' => 'groups', 'foreign_field' => 'id', 'delete' => 'SET NULL', 'update' => 'CASCADE']);
		$this->dbforge->add_field(['ip_address' => ['type' => 'VARCHAR', 'constraint' => '45']]);
		$this->dbforge->add_field(['username' => ['type' => 'VARCHAR', 'constraint' => '100']]);
		$this->dbforge->add_field(['password' => ['type' => 'VARCHAR', 'constraint' => '255']]);
		$this->dbforge->add_field(['email' => ['type' => 'VARCHAR', 'constraint' => '255', 'unique' => TRUE]]);
		$this->dbforge->add_field(['activation_selector' => ['type' => 'VARCHAR', 'constraint' => '255', 'unique' => TRUE, 'null' => TRUE]]);
		$this->dbforge->add_field(['activation_code' => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE]]);
		$this->dbforge->add_field(['forgotten_password_selector' => ['type' => 'VARCHAR', 'constraint' => '255', 'unique' => TRUE, 'null' => TRUE]]);
		$this->dbforge->add_field(['forgotten_password_code' => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE]]);
		$this->dbforge->add_field(['forgotten_password_time' => ['type' => 'INT', 'unsigned' => TRUE, 'null' => TRUE]]);
		$this->dbforge->add_field(['remember_selector' => ['type' => 'VARCHAR', 'constraint' => '255', 'unique' => TRUE, 'null' => TRUE]]);
		$this->dbforge->add_field(['remember_code' => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE]]);
		$this->dbforge->add_field(['created_on' => ['type' => 'INT', 'unsigned' => TRUE]]);
		$this->dbforge->add_field(['last_login' => ['type' => 'INT', 'unsigned' => TRUE, 'null' => TRUE]]);
		$this->dbforge->add_field(['active' => ['type' => 'TINYINT', 'constraint' => '1', 'unsigned' => TRUE, 'null' => TRUE]]);
		$this->dbforge->add_field(['first_name' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => TRUE]]);
		$this->dbforge->add_field(['last_name' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => TRUE]]);
		$this->dbforge->add_field(['company' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => TRUE]]);
		$this->dbforge->add_field(['phone' => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => TRUE]]);
        $this->dbforge->softDelete();
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->table, TRUE);
    }

    public function down()
    {
		$this->dbforge->drop_table($this->table, TRUE);
    }
}
