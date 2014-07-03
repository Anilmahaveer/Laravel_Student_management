<?php

class Add_Authors {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
			'name'=>'Andrew Perkins',
			'bio'=>'Andrew is lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend tellus at fermentum. Maecenas vitae dolor quis augue congue rutrum vel ut mauris. Nunc in eros augue. Aliquam ut eros nulla. Suspendisse felis mi, posuere nec aliquet in, suscipit vitae orci. Nullam lorem justo, imperdiet eu consectetur quis, egestas vitae magna. Mauris at diam at quam porta iaculis a eu eros. Aliquam malesuada dolor a sapien volutpat ut aliquam arcu ornare. Quisque ac felis sed sapien blandit facilisis. Nam sit amet ornare enim. Sed luctus justo quis nulla cursus consectetur. Nulla a ultricies diam. Suspendisse eget augue in justo iaculis commodo at sagittis lorem. Duis fermentum mi nec purus tincidunt tincidunt. Pellentesque in semper dolor.',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name'=>'Mary Lancaster',
			'bio'=>'Mary is lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend tellus at fermentum. Maecenas vitae dolor quis augue congue rutrum vel ut mauris. Nunc in eros augue. Aliquam ut eros nulla. Suspendisse felis mi, posuere nec aliquet in, suscipit vitae orci. Nullam lorem justo, imperdiet eu consectetur quis, egestas vitae magna. Mauris at diam at quam porta iaculis a eu eros. Aliquam malesuada dolor a sapien volutpat ut aliquam arcu ornare. Quisque ac felis sed sapien blandit facilisis. Nam sit amet ornare enim. Sed luctus justo quis nulla cursus consectetur. Nulla a ultricies diam. Suspendisse eget augue in justo iaculis commodo at sagittis lorem. Duis fermentum mi nec purus tincidunt tincidunt. Pellentesque in semper dolor.',
			'created_at'=>"2012-07-20 10:00:00",
			'updated_at'=>"2012-07-21 10:00:00"
		));

		DB::table('authors')->insert(array(
			'name'=>'Kenny Yuen',
			'bio'=>'Kenny is lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend tellus at fermentum. Maecenas vitae dolor quis augue congue rutrum vel ut mauris. Nunc in eros augue. Aliquam ut eros nulla. Suspendisse felis mi, posuere nec aliquet in, suscipit vitae orci. Nullam lorem justo, imperdiet eu consectetur quis, egestas vitae magna. Mauris at diam at quam porta iaculis a eu eros. Aliquam malesuada dolor a sapien volutpat ut aliquam arcu ornare. Quisque ac felis sed sapien blandit facilisis. Nam sit amet ornare enim. Sed luctus justo quis nulla cursus consectetur. Nulla a ultricies diam. Suspendisse eget augue in justo iaculis commodo at sagittis lorem. Duis fermentum mi nec purus tincidunt tincidunt. Pellentesque in semper dolor.',
			'created_at'=>"2012-07-19 10:00:00",
			'updated_at'=>"2012-07-19 10:00:00"
		));

		DB::table('authors')->insert(array(
			'name'=>'Mary Wells',
			'bio'=>'Mary W. is lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend tellus at fermentum. Maecenas vitae dolor quis augue congue rutrum vel ut mauris. Nunc in eros augue. Aliquam ut eros nulla. Suspendisse felis mi, posuere nec aliquet in, suscipit vitae orci. Nullam lorem justo, imperdiet eu consectetur quis, egestas vitae magna. Mauris at diam at quam porta iaculis a eu eros. Aliquam malesuada dolor a sapien volutpat ut aliquam arcu ornare. Quisque ac felis sed sapien blandit facilisis. Nam sit amet ornare enim. Sed luctus justo quis nulla cursus consectetur. Nulla a ultricies diam. Suspendisse eget augue in justo iaculis commodo at sagittis lorem. Duis fermentum mi nec purus tincidunt tincidunt. Pellentesque in semper dolor.',
			'created_at'=>"2012-07-19 10:00:00",
			'updated_at'=>"2012-07-22 10:00:00"
		));

		DB::table('authors')->insert(array(
			'name'=>'Jane Doe',
			'bio'=>'Jane is lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend tellus at fermentum. Maecenas vitae dolor quis augue congue rutrum vel ut mauris. Nunc in eros augue. Aliquam ut eros nulla. Suspendisse felis mi, posuere nec aliquet in, suscipit vitae orci. Nullam lorem justo, imperdiet eu consectetur quis, egestas vitae magna. Mauris at diam at quam porta iaculis a eu eros. Aliquam malesuada dolor a sapien volutpat ut aliquam arcu ornare. Quisque ac felis sed sapien blandit facilisis. Nam sit amet ornare enim. Sed luctus justo quis nulla cursus consectetur. Nulla a ultricies diam. Suspendisse eget augue in justo iaculis commodo at sagittis lorem. Duis fermentum mi nec purus tincidunt tincidunt. Pellentesque in semper dolor.',
			'created_at'=>"2012-07-16 10:00:00",
			'updated_at'=>"2012-07-17 10:00:00"
		));

		DB::table('authors')->insert(array(
			'name'=>'Bill Bo',
			'bio'=>'Bill is lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend tellus at fermentum. Maecenas vitae dolor quis augue congue rutrum vel ut mauris. Nunc in eros augue. Aliquam ut eros nulla. Suspendisse felis mi, posuere nec aliquet in, suscipit vitae orci. Nullam lorem justo, imperdiet eu consectetur quis, egestas vitae magna. Mauris at diam at quam porta iaculis a eu eros. Aliquam malesuada dolor a sapien volutpat ut aliquam arcu ornare. Quisque ac felis sed sapien blandit facilisis. Nam sit amet ornare enim. Sed luctus justo quis nulla cursus consectetur. Nulla a ultricies diam. Suspendisse eget augue in justo iaculis commodo at sagittis lorem. Duis fermentum mi nec purus tincidunt tincidunt. Pellentesque in semper dolor.',
			'created_at'=>"2012-07-25 10:00:00",
			'updated_at'=>"2012-07-26 10:00:00"
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->delete(1);
		DB::table('authors')->delete(2);
		DB::table('authors')->delete(3);
		DB::table('authors')->delete(4);
		DB::table('authors')->delete(5);
		DB::table('authors')->delete(6);
	}

}