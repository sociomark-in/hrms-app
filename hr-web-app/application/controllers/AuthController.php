<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH . 'core/My_controller.php');

class AuthController extends My_Controller
{
	public $data;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("UserModel");
	}

	public function login(){
		$this->load->mini_layout("auth/login", $this->data);
	}
	
	public function authenticate(){
		$form_data = $this->input->post();

		$user = json_decode($this->UserModel->get(NULL, ["email" =>$form_data["email_emp_id"]]), true)[0];

		if(password_verify($form_data["password"], $user["password"])){
			set_cookie("app_id", $user["app_id"], 60000);
			$this->UserModel->update(['status' => 1],["email" =>$form_data["email_emp_id"]]);
			$this->session->set_flashdata('first_user', true);
			redirect('dashboard');
		} else {
			redirect('login');
		}
	}

	public function register(){
		$employee_data = [
			"user_id" => 1,
			"emp_id" => "",
			"pan" => "",
			"dob" => "",
			"gender" => "",
			"dept_id" => 1,
			"designation_id" => 1,
			"joining_date" => "",
			"leave_date" => "",
			"level" => 1,
			"report_to" => 1														
		];
		$user_data = [
			"app_id" => "IuxZcao13A40gg1YMaNHnWOWJoJoLpJb",
			"first_name" => "Hemant",
			"last_name" => "Karekar",
			"email" => "hemant@sociomark.in",	
			"password" => password_hash("Sociomark@0610", PASSWORD_BCRYPT),				
		];

		$this->UserModel->create($user_data);
	}
}
