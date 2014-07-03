<?php

class Student extends Eloquent {

	public static $table = 'std_grp_link'; 

	public static $rules = array(
		'student_name'=>'select',
		'group_name'=>'select'
	);

	public static function validate($data) {
		return Validator::make($data, static::$rules);
	}
}