<?php

class Students_Controller extends Base_Controller {

	public $restful = true;

	public function get_index() {
		return View::make('authors.index')
			->with('title', 'Authors and Books')
			->with('authors', Author::order_by('name')->get());
	}

	public function get_view($id) {
		return View::make('students.view')
			->with('title', 'Group View Page')
			->with('student', Author::find($id));
	}
	}

	/* public function get_new() {
		return View::make('students.new')
			->with('title', 'Add New Group');
	}

	public function post_create() {
		$validation = Group::validate(Input::all());

		if ($validation->fails()) {
			return Redirect::to_route('new_student')->with_errors($validation)->with_input();
		} else {
			Group::create(array(
				'student_name'=>Input::get('student_name'),
				'group_name'=>Input::get('group_name')
			));
			return Redirect::to_route('students')
				->with('message', 'The Group was created successfully!');
		}
	}
	public function delete_destroy() {
		Student::find(Input::get('id'))->delete();
		return Redirect::to_route('students')
			->with('message', 'The Group was deleted successfully!');
	}
} */