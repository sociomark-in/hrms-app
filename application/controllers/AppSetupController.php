<?php

class AppSetupController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function settings() {
		$this->load->view("dashboard/setup/app_settings");
	}
}
