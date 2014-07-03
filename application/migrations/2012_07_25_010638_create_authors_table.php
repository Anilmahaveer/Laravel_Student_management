<?php

class Create_Authors_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authors', function($table){
			$table->increments('id');
			$table->string('name');
			$table->text('bio');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('authors');
	}

}