<?php 

class UserSeeder
extends DatabaseSeeder
{
	public function run()
	{
		$users = array(
			array(
				"username" => "zarkovic.milos",
				"password" => Hash::make("julian"),
				"email"	   => "mzarkovicm@gmail.com"
			)
		);

		foreach ($users as $user)
		{
			User::create($user);
		}
	}
}