<?php if (! defined('BASEPATH')) exit('No direct script access');

class MY_Loader extends CI_Loader {

	//php 5 constructor
	function __construct() {
		parent::__construct();
	}


	/**
	 *	Function that loads a json file
	 *	The content type is set to "application/json"
	 *
	 *  @since 09-Sep-2011
	 *  @author  Jarrett Burningham
	 *	 @access public
	*/
	public function json($data)
	{
		$this->CI =& get_instance();

		// if it is done by ajax, set content type to json
		if ($this->CI->input->is_ajax_request()) 
		{
			$this->CI->output->enable_profiler(FALSE);
			$this->CI->output->set_content_type('application/json');
		}
		else 
		{
			$this->CI->output->enable_profiler(TRUE);
			$this->CI->output->set_content_type('text/html');
		}

		// Send the JSON
		$this->CI->output->set_output(json_encode($data));			
	}
	
	/**
	 *	 Fuction that returns the cached variables
	 *	 This is necessary for the MY_Profiler to have access to the cached 
	 *	 variables
	 *
	 *  @since 09-Sep-2011
	 *  @author  Jarrett Burningham
	 *	 @access public
	*/
	public function get_vars()
	{
		return $this->_ci_cached_vars;
	}
	
}


/* End of file: MY_Loader.php */ 
/* Location: ./application/core/MY_Loader.php */ 
