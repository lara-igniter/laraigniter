<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_group_permission_table extends CI_Migration
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
        $this->table = $this->config->item('tables', 'ion_auth')['group_permission'];
    }

    public function up()
    {
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(['permission_id' => ['type' => 'BIGINT', 'unsigned' => TRUE, 'default' => NULL]]);
		$this->dbforge->add_foreign_key(['field' => 'permission_id', 'foreign_table' => 'permissions', 'foreign_field' => 'id', 'delete' => 'SET NULL', 'update' => 'CASCADE']);
		$this->dbforge->add_field(['group_id' => ['type' => 'BIGINT','unsigned' => TRUE,'default' => NULL]]);
		$this->dbforge->add_foreign_key(['field' => 'group_id', 'foreign_table' => 'groups', 'foreign_field' => 'id', 'delete' => 'SET NULL', 'update' => 'CASCADE']);
		// $this->dbforge->softDelete()
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->table, TRUE);
    }

    public function down()
    {
		$this->dbforge->drop_table($this->table, TRUE);
    }
}
