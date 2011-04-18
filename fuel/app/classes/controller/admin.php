<?php

class Controller_Admin extends Admin {

	public function action_index()
	{
		$this->template->title = 'Test &raquo; Index';
		$this->template->content = View::factory('admin/index');
		parent::language();
	}
	
	public function action_logout()
	{
		parent::logout();
	}
	
	public function action_random_shit()
	{
		$this->template->title = 'Test &raquo; Random Shit';
		$this->template->content = View::factory('admin/index');
	}

}

/* End of file test.php */
