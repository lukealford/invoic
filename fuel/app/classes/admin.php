<?php
/* 
 * @access protected
 * @requires login
 * 
 * Interface for all backend controllers.
 * 
 */

class Admin extends Controller_Template {

	public static $auth;
	
	public static $data = array();

	public function before()
	{
		parent::before();
		static::$auth = Auth::instance();
		$data['language'] = (isset($_POST['language'])) ? $_POST['language'] : self::language();
		Config::set('language', $data['language']);	
		Lang::load('general');
		if(!static::$auth->perform_check())
		{
			static::$data['redirect'] = Uri::current();
			self::login();
		}
	}
	
	public function login()
	{
		if($_POST)
		{
			if(static::$auth->login($_POST['username'], $_POST['password']))
			{
				Session::set_flash('notice', Lang::line('auth.authenticate.success'));
				Response::redirect(static::$data['redirect']);
			}
			else
			{
				Session::set_flash('notice', Lang::line('auth.authenticate.fail'));
			}
		}
	}
	
	public function logout()
	{
		static::$auth->logout();
		Session::set_flash('notice', Lang::line('auth.authenticate.logout'));
		Response::redirect('admin');
	}
	
	public function after()
	{
		parent::after();
		if(!static::$auth->perform_check() && Uri::segment(2) !== 'logout')
		{
			$this->template->content = View::factory('general/form');
		}
	}
	
	public function language()
	{
		$langs = Agent::languages();
		$accepted = array();
		foreach($langs as $lang)
		{
			if(strlen($lang) == 2)
			{
				$accepted[] = $lang;
			}
		}
		return $accepted;
	}
	
} // end of file admin.php
