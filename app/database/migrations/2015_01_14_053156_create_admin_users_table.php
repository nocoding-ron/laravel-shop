<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_users', function($user) {
                $user->increments('id');
                $user->string('email', 50);
                $user->string('username', 50);
                $user->string('password', 100);
                $user->string('type',50);
                $user->string('remember_token', 100)-> nullable();
                $user->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin_users');
	}

}
