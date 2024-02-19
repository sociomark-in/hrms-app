<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH . 'core/My_controller.php');

class AuthController extends My_Controller
{
	public $data;
	
	public function __construct()
	{
		parent::__construct();
	}

	public function login(){
		$this->load->mini_layout("auth/login", $this->data);
	}
	
	public function authenticate(){
		set_cookie("app_id", random_string('alnum', 16), 600);
		redirect('dashboard');
	}
}
