<?php

class UserAccountController extends My_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function  profile() {
		if(NULL !== $this->input->get('employee-id')){
			$this->load->employee_dashboard('general/profile');
		} else {
			$this->load->admin_dashboard('general/profile');
		}
	}
}
