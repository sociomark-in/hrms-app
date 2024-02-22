<?php
// 
class CompanySettingsController extends My_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function appSettings($setting)
	{
		switch ($setting) {
			case 'home':
				// echo "General Company Settings";
				$this->load->admin_dashboard('admin/settings/home');
				break;

			case 'general':
				$this->load->admin_dashboard('admin/settings/general');
				break;

			case 'attendance':
				$this->load->admin_dashboard('admin/settings/attendance');
				break;

			case 'payroll':
				$this->load->admin_dashboard('admin/settings/payroll');
				break;

			case 'salary':
				$this->load->admin_dashboard('admin/settings/salary');
				break;

			case 'employee':
				$this->load->admin_dashboard('admin/settings/employee');
				break;

			case 'documents':
				$this->load->admin_dashboard('admin/settings/documents');
				break;

			case 'roles':
				$this->load->admin_dashboard('admin/settings/employee');
				break;

			case 'templates':
				$this->load->admin_dashboard('admin/settings/documents');
				break;

			default:
				# code...
				break;
		}
	}
}
