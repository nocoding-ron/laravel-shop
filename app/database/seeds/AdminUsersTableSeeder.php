<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdminUsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 3) as $index)
		{
			AdminUser::create([
                'email' => $faker->email(),
                'username' => $faker->userName(),
                'password' => Hash::make('testpass123')
			]);
		}
	}

}