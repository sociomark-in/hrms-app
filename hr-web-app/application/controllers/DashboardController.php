<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH . 'core/My_controller.php');

class DashboardController extends My_Controller
{
	public $data;
	
	public function __construct()
	{
		parent::__construct();
		$this->_auth_();
	}
	
	public function index(){
		/*
		$user = $this->session->get_userdata();
		$employee = UserModel->get(['username' => $user['username]]);
		EventsModel->get(); 
		HolidaysModel->get(); 
		if($user['app_role'] == "admin"){
			LeavesModel->get(); 
		*/
		$this->session->set_flashdata('first_user', true);
		$this->load->employee_dashboard("admin/home", $this->data);

		/*
		else
			LeavesModel->get(null, ['reporting' => $employee['id']]); 
			LeavesModel->count(null, ['reporting' => $employee['id']]); 
		*/
	}

	public function attendance(){
		$this->load->employee_dashboard("admin/attendance", $this->data);
	}
}
