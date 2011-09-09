<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/main
	 *	- or -  
	 * 		http://example.com/index.php/main/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('main');
	}

	/**
	 *	 Example page
	 *
	 *  @since 09-Sep-2011
	 *  @author  Jarrett Burningham
	 *	 @access public
	*/
	public function example()
	{
		$this->load->view('example');
	}
	
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
