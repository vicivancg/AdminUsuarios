<?php defined('SYSPATH') or die('No direct script access.');

class Controller_PersonaController extends Controller_Template {

	public $template = 'templateUsuarios';
	public function action_index()
	{
		$usuarios = ORM::factory('Usuario')->find_all();
		if(!isset($usuarios[0]))
		{
			$usuarios = array();
		}
		$this->template->content = View::factory('index/usuarios')-> bind('usuarios',$usuarios);
	}

} // End Welcome