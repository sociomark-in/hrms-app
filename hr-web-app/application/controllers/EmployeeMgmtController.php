<?php

class EmployeeMgmtController extends My_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->data['globals']['app_id'] = $this->_auth_();
		$this->load->model("attendance/AttendanceModel", "AttendanceModel");
	}

	public function home()
	{
		$this->data['page'] = [
			"title" => "All Employees" . " - " . COMPANY_NAME
		];
		$this->load->admin_dashboard("general/employees_list", $this->data);
	}
	public function new_employee()
	{
	}
}
