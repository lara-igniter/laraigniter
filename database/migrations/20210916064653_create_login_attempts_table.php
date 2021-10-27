<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_login_attempts_table extends CI_Migration
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
        $this->table = $this->config->item('tables', 'ion_auth')['login_attempts'];
    }

    public function up()
    {
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(['ip_address' => ['type' => 'VARCHAR', 'constraint' => '45']]);
		$this->dbforge->add_field(['login' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => TRUE]]);
		$this->dbforge->add_field(['time' => ['type' => 'INT', 'unsigned' => TRUE, 'null' => TRUE]]);
		// $this->dbforge->softDelete()
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->table, TRUE);
    }

    public function down()
    {
		$this->dbforge->drop_table($this->table, TRUE);
    }
}
