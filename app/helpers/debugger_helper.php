<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	 * 	Method to parse the string representation of this object.
	 *
	 * 	@return  The string representation of this object.
	 */
	if ( ! function_exists('parse'))
	{
		function parse($obj) 
		{
			$retval = "";
			global $__level_deep;
			
			if (!isset($__level_deep)) {
				$__level_deep = array();
			}
			
			if (is_object($obj)) {
				$retval .= print_r($obj, true);
			} elseif (is_array($obj)) {
				foreach(array_keys($obj) as $keys) {
					if ($keys == "0" || intval($keys)) {
						array_push($__level_deep,"[".$keys."]");
					} else {
						array_push($__level_deep,"[\"".$keys."\"]");
					}
					$retval .= parse($obj[$keys]);
					array_pop($__level_deep);
				}
			} else {
				$retval .= implode("",$__level_deep)." = $obj\n";
			}
			return $retval;
		}
		
	}

	
	/**
	 *	 Method to display an object, array, or variable to the screen for debugging purposes.
	 *
	 *  @since 09-Sep-2011
	 *  @author  Jarrett Burningham
	 *	 @access public
	 *	 @param	var		An object, an array, or a variable
	 *	 @output	string	Echo output to the screen
	 */
	if ( ! function_exists('debug'))
	{
	    
		function debug($obj, $print_r = TRUE)
		{
			if(ENVIRONMENT == 'development')
			{
				echo "<pre style=\"color: red; background-color: #FFFFFF; \">";	
				if ($print_r) 
				{
					print_r($obj);
				}
				else 
				{
					if (is_bool($obj)) {
						$bool_val = ($obj) ? 'true' : 'false' ;
						echo "[bool] = $bool_val\n";
					} 
					else 
					{
						echo parse($obj);
					}
				}
				echo "</pre>";	
			}
		}
	}	 


/* End of file debug_helper.php */
/* Location: application/helpers/debug_helper.php */
