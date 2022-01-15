<?php 
/**
 * Example Plugin
 * 
 * Init Class 
 * The main class of the plugin 
 *
*/ 

namespace Src; 

class Init {
    
    /**
	 * Store all the classes inside an array
	 * @return array with all classes
	 */
	public static function get_services()
	{
		return [
            Base\Enqueue::class,
		];
	}

    /**
	 * Loop through the classes, initialize them
	 * and call register() method if it exists
	 * @return void
	 */
	public static function register_services()
	{
		foreach (self::get_services() as $class){
			$service = self::instantiate($class);

			if(method_exists($service, 'register')){
				$service->register();
			}
		}
	}

    /**
	 * Initialize the class
	 *
	 * @param $class.
	 *
	 * @return mixed
	 */
	private static function instantiate($class)
	{
		return new $class; // == return new Class(); -> class called in register_services from an array inside get_services
	}

}