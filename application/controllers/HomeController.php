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
<<<<<<< HEAD
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
=======
>>>>>>> fca02e6829e11195fa8c20cb1893e0e18658468b
	
	public function login(){
		$this->load->view('pages/login');
	}
	public function register(){
		$this->load->view('pages/register');
	}
<<<<<<< HEAD
	public function subscription(){
		$this->load->view('pages/subscription');
	}
=======
>>>>>>> fca02e6829e11195fa8c20cb1893e0e18658468b
}
