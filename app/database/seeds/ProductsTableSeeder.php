<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Product::create([
                'product_name' => $faker->name,
                'product_description' => $faker->paragraph(3),
                'sku' => $faker-> numerify('RON-###'),
                'price' => $faker-> numberBetween(100, 200),
                'stock' => $faker-> numberBetween(10, 20),
                'type' => 'simple',
                'category' => $faker->word,
                'condition' => 'new',
                'brand' => $faker->word
			]);
		}
	}

}