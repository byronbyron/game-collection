<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		Role::truncate();

        Role::create([
            'name' => 'user'
        ]);
        
        Role::create([
            'name' => 'admin'
        ]);
	}

}