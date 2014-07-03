<?php

class Group extends Eloquent {
	public static $table = 'student_group';
	/* public static $table = 'student';
	public static $table = 'std_grp_link'; */

	public static $rules = array(
		'group_name'=>'required|min:2',
		'group_desc'=>'required|min:10'
	);

	public static function validate($data) {
		return Validator::make($data, static::$rules);
	}
}