<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $product)
		{
			$product->increments('id');
            $product->string('product_name', 100);
            $product->string('product_description', 500);
            $product->string('sku',50);
            $product->string('price', 100);
            $product->string('stock',100);
            $product->string('type',50);
            $product->string('category',100);
            $product->string('condition',50);
            $product->string('brand',100);
            $product->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
