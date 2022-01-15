<?php
/**
 * Example Plugin
 * 
 * Admin class 
 * Class to create menu to admin section of the plugin 
 *
*/ 

namespace Src\Pages;

use Src\Base\BaseController;

class Admin extends BaseController {

	public function register()
	{
		add_action('admin_menu', [$this, 'example_menu']);
	}

	/**
	 * Function to create main menu / page
	 * of the standauto plugin
	 * @return void
	 */
	public function example_menu()
	{
		add_menu_page(
			'example-plugin',
			'Example Plugin',
			'manage_options',
			'example-plugin',
			[$this, 'admin_view'],
			'dashicons-car',
			'100',

		);
	}

	/**
	 * Require the view of the admin menu
	 * @return void
	 */
	public function admin_view()
	{
		$this->view('views/admin.php');
	}

}