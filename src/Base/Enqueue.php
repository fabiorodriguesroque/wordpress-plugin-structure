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
		add_action('wp_enqueue_scripts', [$this, 'enqueue']);
		add_action('admin_enqueue_scripts', [$this, 'enqueue']);
	}

	public function enqueue()
	{
		wp_enqueue_style('mystyle', EXAMPLE_PLUGIN_URL . 'assets/css/style.css', array(), PLUGIN_VERSION, 'all');
		wp_enqueue_script( 'myjavascript', EXAMPLE_PLUGIN_URL . 'assets/js/app.js', array(), PLUGIN_VERSION, true);
	}

}