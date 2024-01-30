<?php

class HomeController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('pages/index');
	}
	public function products($slug){
		switch ($slug) {
			case 'value':
				# code...
				break;
			
			default:
				redirect(base_url());
				break;
		}
		$this->load->view('pages/index');
	}
	public function modules($slug){
		switch ($slug) {
			case 'value':
				# code...
				break;
			
			default:
				redirect(base_url());
				break;
		}
		$this->load->view('pages/index');
	}
	
	public function login(){
		$this->load->view('pages/login');
	}
	public function register(){
		$this->load->view('pages/register');
	}
	public function subscription(){
		$this->load->view('pages/subscription');
	}
}
