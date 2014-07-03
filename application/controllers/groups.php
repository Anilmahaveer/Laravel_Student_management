<?php

class Groups_Controller extends Base_Controller {

	public $restful = true;

	public function get_index() {
		return View::make('groups.index')
			->with('title', 'Authors and Books')
			->with('groups', Student::all());
	}
	public function get_select() {
		return View::make('groups.select')
			->with('title', 'Authors and Books')
			->with('groups', Group::all());
	}

	public function get_view($id) {
		return View::make('groups.view')
			->with('title', 'Group View Page')
			->with('group', Group::find($id));
	}

	public function get_new() {
		return View::make('groups.new')
			->with('title', 'Add New Group');
	}

	public function post_create() {
		$validation = Group::validate(Input::all());

		if ($validation->fails()) {
			return Redirect::to_route('new_group')->with_errors($validation)->with_input();
		} else {
			Group::create(array(
				'group_name'=>Input::get('group_name'),
				'group_desc'=>Input::get('group_desc')
			));
			return Redirect::to_route('groups')
				->with('message', 'The Group was created successfully!');
		}
	}
	public function delete_destroy() {
	
		Student::find(Input::get('id'))->delete();
		return Redirect::to_route('groups')
			->with('message', 'The Group was deleted successfully!');
	}
}