<?php
/**
 * Example Plugin
 * 
 * Base Controller class 
 * Class to main functions of the controller 
 *
*/ 

namespace Src\Base;


class BaseController {

	public $plugin_path;

	public function __construct()
	{
		$this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
	}

	public function view($path)
	{
		return require_once $this->plugin_path . $path;
	}
}