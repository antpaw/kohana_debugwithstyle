<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Debugger extends Controller {
	
	/*
		I don't like to write D::debug() so I use this function inside the index.php:
		
		function d($var)
		{
			print D::debug($var);
			die();
		}
	*/
	
	public function action_index()
	{
		D::debug(array('foo' => 'bar'));
	}
}