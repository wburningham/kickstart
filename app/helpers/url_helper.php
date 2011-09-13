<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	 * 	Method to return the static url for the site
	 * 	If the static_url is not set in the config file, the base_url is 
	 * 	returned
	 */
	if ( ! function_exists('static_url'))
	{
		function static_url() 
		{
			$config =& get_config();	
			return (isset($config['static_url']) AND $config['static_url'] != '') ? $config['static_url'] : $config['base_url'];
		}
	}
