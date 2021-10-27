<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user_group_table extends CI_Migration
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
        $this->table = $this->config->item('tables', 'ion_auth')['user_group'];
    }

    public function up()
    {
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(['user_id' => ['type' => 'BIGINT', 'unsigned' => TRUE]]);
		$this->dbforge->add_field(['group_id' => ['type' => 'BIGINT', 'unsigned' => TRUE]]);
		// $this->dbforge->softDelete()
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->table, TRUE);
    }

    public function down()
    {
		$this->dbforge->drop_table($this->table, TRUE);
    }
}
