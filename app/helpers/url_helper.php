<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	 * 	Method to return the static url for the site
	 * 	If the static_url is not set in the config file, the base_url is 
	 * 	returned
	 */
	if ( ! function_exists('static_url'))
	{
		function static_url($uri = '') 
		{
			$config =& get_config();
			$static_url = (isset($config['static_url']) AND $config['static_url'] != '') ? $config['static_url'] : $config['base_url'];
			if ($uri == '')
			{
				return rtrim($static_url, '/').'/';
			}
			if (is_array($uri))
			{
				$uri = implode('/', $uri);
			}
			return rtrim($static_url, '/').'/'.$uri;
		}
	}
