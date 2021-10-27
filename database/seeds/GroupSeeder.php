<?php

class GroupSeeder extends Seeder
{
	private $table = 'groups';

	public function run()
	{
		$group = [
			'name' => 'admin',
            'description' => 'Administrator'
		];

		$this->db->insert($this->table, $group);
	}
}
