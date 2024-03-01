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
			"title" => "Employee Management" . " - " . $this->COMPANY_NAME
		];
		$this->load->admin_dashboard("admin/employee/employees_list", $this->data);
	}
	public function new_employee()
	{
		$this->data['control_options'] = [
			'fields' => ["first_name", "last_name", "email", "mobile", "dob", "gender", "photo"]
		];
		$this->data['page'] = [
			"title" => "All Employees" . " - " . $this->COMPANY_NAME
		];
		$this->load->admin_dashboard("admin/employee/new_employee", $this->data);
	}

	public function add_employee() {
		redirect("employee-management/employees/add/success");
	}

	public function add_action_status($status)
	{
		switch ($status) {
			case 'success':
				$this->load->admin_dashboard("status/employee_add_success", $this->data);
				break;
			
			default:
				# code...
				break;
		}
	}
}
