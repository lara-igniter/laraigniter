<?php

class UserSeeder extends Seeder
{
	private $table = 'users';

	public function run()
	{
		$user = [
			'group_id' => 1,
			'ip_address' => '127.0.0.1',
			'username' => 'administrator',
			'password' => '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa',
			'email' => 'admin@' . parse_url(env('APP_URL'))['host'],
			'activation_code' => '',
			'forgotten_password_code' => NULL,
			'created_on' => '1268889823',
			'last_login' => '1268889823',
			'active' => '1',
			'first_name' => 'George',
			'last_name' => 'Tsachrelias',
			'company' => 'Silktech',
			'phone' => '2610600785'
		];

		$this->db->insert($this->table, $user);
	}
}
