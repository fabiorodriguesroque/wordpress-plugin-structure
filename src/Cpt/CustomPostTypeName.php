<?php 
/**
 * Example Plugin
 * 
 * CustomPostTypeName class 
 * Class to create a Custom Post Type
 *
*/
namespace Src\Cpt;


use Src\Base\BaseController;

class CustomPostTypeName extends BaseController {

	public function register()
	{
		add_action('init', [$this, 'create']);
	}

	public function create()
	{
		// @car is just an example 
		$labels = [
			'name'                  => _x('Cars', 'textdomain'),
			'singular_name'         => _x('Car', 'textdomain'),
			'menu_name'             => _x('Cars', 'textdomain'),
			'name_admin_bar'        => _x('Car', 'textdomain'),
			'add_new'               => __('Add New', 'textdomain'),
			'add_new_item'          => __('Add New Car', 'textdomain'),
			'new_item'              => __('New Car', 'textdomain'),
			'edit_item'             => __('Edit Car', 'textdomain'),
			'view_item'             => __('View Car', 'textdomain'),
			'all_items'             => __('All Cars', 'textdomain'),
			'search_items'          => __('Search Cars', 'textdomain'),
			'parent_item_colon'     => __('Parent Cars:', 'textdomain'),
			'not_found'             => __('No Cars found.', 'textdomain'),
			'not_found_in_trash'    => __('No Cars found in Trash.', 'textdomain'),
			'featured_image'        => _x('Car Cover Image', 'textdomain'),
			'set_featured_image'    => _x('Set cover image', 'textdomain'),
			'remove_featured_image' => _x('Remove cover image', 'textdomain'),
			'use_featured_image'    => _x('Use as cover image', 'textdomain'),
			'archives'              => _x('Car archives', 'textdomain'),
			'insert_into_item'      => _x('Insert into standauto-cars', 'textdomain'),
			'uploaded_to_this_item' => _x('Uploaded to this car', 'textdomain'),
			'filter_items_list'     => _x('Filter cars list', 'textdomain'),
			'items_list_navigation' => _x('Cars list navigation', 'textdomain'),
			'items_list'            => _x('Cars list', 'textdomain'),
		];

		$args = [
			'labels'             => $labels,
			'description'        => 'Manage your cars.',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => ['slug' => 'cars'],
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'menu_icon'          => 'dashicons-dashboard',
			'supports'           => ['title', 'editor', 'author', 'thumbnail'],
			'taxonomies'         => [],
			'show_in_rest'       => true
		];

		register_post_type('cpt-name', $args);
	}

}