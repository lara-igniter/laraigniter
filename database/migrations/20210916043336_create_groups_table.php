<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_groups_table extends CI_Migration
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

		$this->load->config('ion_auth', TRUE);
		$this->table = $this->config->item('tables', 'ion_auth')['groups'];
    }

    public function up()
    {
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(['name' => ['type' => 'VARCHAR', 'constraint' => '20']]);
		$this->dbforge->add_field(['description' => ['type' => 'VARCHAR', 'constraint' => '100']]);
		$this->dbforge->softDelete();
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->table, TRUE);
    }

    public function down()
    {
		$this->dbforge->drop_table($this->table, TRUE);
    }
}
