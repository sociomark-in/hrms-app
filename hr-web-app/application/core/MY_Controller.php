<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");

class My_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!is_https()) {
			$this->session->set_flashdata('http_error', 'Please change url to HTTPS!!');
		}
	}
	
	public function _auth_(){
		$app_id = get_cookie("app_id", true);
		if(( $app_id == null) || ($app_id == "")) {
			redirect(base_url('login')) ;
		}
	}
}
