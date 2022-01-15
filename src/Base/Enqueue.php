<?php
/**
 * Example Plugin
 * 
 * Enqueue class 
 * Class to enqueue all styles and scripts
 *
*/ 

namespace Src\Base;


class Enqueue extends BaseController {


	public function register()
	{
		// Enqueue to website
		add_action('wp_enqueue_scripts', [$this, 'enqueue']);

		// Enqueue to admin section
		add_action('admin_enqueue_scripts', [$this, 'enqueue']);
	}

	public function enqueue()
	{
		wp_enqueue_style('mystyle', EXAMPLE_PLUGIN_URL . 'assets/css/style.css', array(), EXAMPLE_PLUGIN_VERSION, 'all');
		wp_enqueue_script( 'myjavascript', EXAMPLE_PLUGIN_URL . 'assets/js/app.js', array(), EXAMPLE_PLUGIN_VERSION, true);
	}

}