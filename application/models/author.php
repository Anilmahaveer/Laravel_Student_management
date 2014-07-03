<?php

class Author extends Eloquent {
	public static $table = 'student';

	public static $rules = array(
		'name'=>'required|min:2',
		'phone_number'=>'required|min:10',
		'city'=>'required|min:2',
		'branch'=>'required|min:2'
	);

	public static function validate($data) {
		return Validator::make($data, static::$rules);
	}
}