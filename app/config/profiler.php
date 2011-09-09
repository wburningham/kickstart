<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Profiler Sections
| -------------------------------------------------------------------------
| This file lets you determine whether or not various sections of Profiler
| data are displayed when the Profiler is enabled.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/profiling.html
|
*/

$config['enable_profiler'] 			= TRUE;
$config['show_uri_string'] 			= TRUE;
$config['show_controller_info']		= TRUE;
$config['show_memory_usage']			= FALSE;
$config['show_benchmarks'] 			= TRUE;
$config['show_cookies']					= FALSE;
$config['show_get_vars']				= TRUE;
$config['show_post_vars']				= TRUE;
$config['show_uri_vars']				= TRUE;
$config['show_tpl_vars']				= TRUE;
$config['show_session_userdata']		= FALSE;
$config['show_db_multi_queries'] 	= FALSE; // Only enable if you need to show more than one database in the profiler


/* End of file profiler.php */
/* Location: ./application/config/profiler.php */
