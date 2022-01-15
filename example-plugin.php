<?php 

/**
 * Example Plugin
 *
 * @package           PluginPackage
 * @author            Your Name
 * @copyright         2022 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Example Plugin
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Your Name
 * Author URI:        https://example.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
*/

use Src\Base\Activate; 
use Src\Base\Deactivate; 


defined('ABSPATH') or die("You don't need to do this, we are friendly");

// require autoload 
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
   require_once(dirname(__FILE__) . '/vendor/autoload.php');
}

// Constants 
const EXAMPLE_PLUGIN_NAME    = 'Example Plugin'; 
const EXAMPLE_PLUGIN_VERSION = '1.0.0';

define('EXAMPLE_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('EXAMPLE_PLUGIN_URL', plugin_dir_url(__FILE__));
define('EXAMPLE_PLUGIN', plugin_basename(__FILE__));

// Initialize the plugin 
if (class_exists('Src\\Init')) {
        Src\Init::register_services();
}


/**
 * Fires when the plugin is activated 
 */
function example_plugin_activate()
{
    Activate::activate();
}

/**
 * Fires when the plugin is deactivated
 */
function example_plugin_deactivate()
{
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'example_plugin_activate');
register_deactivation_hook(__FILE__, 'example_plugin_deactivate');