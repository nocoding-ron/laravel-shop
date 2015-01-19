<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.home');
});


Route::get('/customer/login', function()
{
	return View::make('pages.login');
});

Route::get('/checkout/cart', function()
{
	return View::make('pages.cart');
});

Route::get('/checkout', function()
{
	return View::make('pages.checkout');
});

Route::get('/contact-us', function()
{
	return View::make('pages.contact');
});


Route::group(array('prefix'=> 'admin') , function(){

    Route::get('login',array('as'=>'admin.login','uses'=>'AdminAuthController@getLogin'));
    Route::post('login',array('as'=>'admin.login.post','uses'=>'AdminAuthController@postLogin'));
    Route::get('logout',array('as'=>'admin.logout','uses'=>'AdminAuthController@getLogout'));
});

Route::group(array('prefix'=> 'admin', 'before' => 'auth') , function(){

    Route::resource('products', 'AdminProductsController', array('except',array('show')));

});

Route::get('/',array('as'=>'home','uses'=>'ProductsController@getIndex'));
Route::get('product/{id}',array('as'=>'product','uses'=>'ProductsController@getProduct'))->where('id','[1-9][0-9]*');