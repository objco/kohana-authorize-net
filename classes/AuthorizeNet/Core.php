<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package    Authorize-Net
 * @author     Jonathan Davis <jonathan@obj.co>
 * @copyright  (c) 2011 The Objective Company
 * @license    https://raw.github.com/ObjectiveCompany/kohana-authorize-net/3.2/master/LICENSE.md
 **/
class AuthorizeNet_Core {

	/**
	 * Provides auto-loading support for the Authorize.Net classes.
	 *
	 * You should never have to call this function, as simply calling a class
	 * will cause it to be called.
	 *
	 * This function must be enabled as an autoloader in the bootstrap or module init:
	 *
	 *     spl_autoload_register(array('AuthorizeNet', 'auto_load'));
	 *
	 * @param   string   class name
	 * @return  boolean
	 */
	public static function auto_load($class)
	{
		try
		{
			if (0 === stripos($class, 'authorizenet'))
			{
				require_once Kohana::find_file('vendor', 'anet_php_sdk/AuthorizeNet');
			}
			
			return class_exists($class);
		}
		catch (Exception $e)
		{
			Kohana_Exception::handler($e);
			die;
		}
	}

}