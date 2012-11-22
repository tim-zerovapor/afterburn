<?php

class Controller_Base extends Controller_Template {

	public function before()
	{
		parent::before();
		
		// Assign current_user to the instance so controllers can use it
		$this->current_user = Warden::check() ? Warden::current_user() : null ;
		
		// Set a global variable so views can use it
		View::set_global('current_user', $this->current_user);
	}

}