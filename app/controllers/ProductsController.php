<?php

class ProductsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$products = Product::with('user')->get();
		return View::make('products.index', compact('products'));
	}

	public function getProduct($id){
		$product = Product::with('user')->find($id);
		return View::make('products.product', compact('product'));
	}

}
