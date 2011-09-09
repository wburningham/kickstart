<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		// Enable MY_Profiler when in development mode
		if(ENVIRONMENT == 'development')
		{
			$this->config->load('profiler', FALSE, TRUE);

			if ($this->config->config['enable_profiler']) {
			  $this->output->enable_profiler(TRUE);
			}	
			// Disable profiler on ajax requests 
			if ($this->input->is_ajax_request()) 
			{
			   $this->output->enable_profiler(FALSE);
			}
		}
			
	}


	
}


/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */

