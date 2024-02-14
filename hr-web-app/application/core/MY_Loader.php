<?php

class MY_Loader extends CI_Loader
{
	public function __construct()
	{
		parent::__construct();
		$CI =& get_instance();
        $CI->load = $this;
	}
	public function employee_dashboard($view, $vars = array(), $return = FALSE)
	{
		$this->view('layout/_1', $vars);
		$this->view($view, $vars);
		$this->view('layout/_2', $vars);
	}
}
