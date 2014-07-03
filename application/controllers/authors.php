<?php

class Authors_Controller extends Base_Controller {

	public $restful = true;

	public function get_index() {
		return View::make('authors.index')
			->with('title', 'Authors and Books')
			->with('authors', Author::order_by('name')->get());
	}
	public function get_select() {
		return View::make('authors.select')
			->with('title', 'Authors and Books')
			->with('authors', Author::order_by('name')->get())
			->with('groups', Group::order_by('group_name')->get());
	}

	public function get_view($id) {
		return View::make('authors.view')
			->with('title', 'Author View Page')
			->with('author', Author::find($id));
	}

	public function get_new() {
		return View::make('authors.new')
			->with('title', 'Add New Author');
	}

	public function post_create() {
		$validation = Author::validate(Input::all());

		if ($validation->fails()) {
			return Redirect::to_route('new_author')->with_errors($validation)->with_input();
		} else {
			Author::create(array(
				'name'=>Input::get('name'),
				'phone_number'=>Input::get('phone_number'),
				'city'=>Input::get('city'),
				'branch'=>Input::get('branch')
			));
			return Redirect::to_route('authors')
				->with('message', 'The author was created successfully!');
		}
	}
	public function post_insert() {
		$validation = Student::validate(Input::all());

		if ($validation->fails()) {
			return Redirect::to_route('select_author')->with_errors($validation)->with_input();
		} else {
			Student::create(array(
				'student_name'=>Input::get('selectedstudentid'),
				'group_name'=>Input::get('selectedgroupid')
			));
			return Redirect::to_route('groups')
				->with('message', 'The author was created successfully!');
		}
	}

	public function get_edit($id) {
		return View::make('authors.edit')
			->with('title', 'Edit Author')
			->with('author', Author::find($id));
	}

	public function put_update() {
		$id = Input::get('id');
		$validation = Author::validate(Input::all());

		if ($validation->fails()) {
			return Redirect::to_route('edit_author', $id)->with_errors($validation);
		} else {
			Author::update($id, array(
				'name'=>Input::get('name'),
				'phone_number'=>Input::get('phone_number'),
				'city'=>Input::get('city'),
				'branch'=>Input::get('branch')
			));
			return Redirect::to_route('authors', $id)
				->with('message', 'Author updated successfully!');
		}
	}

	public function delete_destroy() {
		$id = Input::get('id');
		Author::find($id)->delete();
		return Redirect::to_route('authors',$id)
			->with('message', 'The author was deleted successfully!');
	}
}