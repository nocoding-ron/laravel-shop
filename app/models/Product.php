<?php

class Product extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'product_name' => 'required',
        'product_description' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['product_name','product_description'];

    public function user(){
        return $this->belongsTo('User');
    }

}