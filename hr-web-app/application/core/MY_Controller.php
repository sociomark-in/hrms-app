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

		// (!$this->session->userdata('authenticate')) ? redirect(site_url('login')) : '';
		((!$this->session->has_userdata('authenticate')) && (get_cookie("app_id", true) == null)) ? redirect(site_url('login')) : '';
	}
}
