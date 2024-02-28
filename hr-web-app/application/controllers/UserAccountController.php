<?php

class UserAccountController extends My_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['globals']['app_id'] = $this->_auth_();
	}

	public function  profile() {
		if(NULL !== $this->input->get('employee_id')){
		} else {
		}
		$this->load->employee_dashboard('employee/profile');
	}
}
