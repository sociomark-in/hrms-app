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
	
	public function login(){
		$this->load->view('pages/login');
	}
	public function register(){
		$this->load->view('pages/register');
	}
}
