<?php

class HomeController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pages/index');
	}
	public function products($slug)
	{
		switch ($slug) {
			case 'hrms':
				$this->load->view('pages/product/hrms');
				# code...
				break;
			case 'payroll':
				$this->load->view('pages/index');
				# code...
				break;

			default:
				redirect(base_url());
				break;
		}
	}
	public function modules($slug)
	{
		switch ($slug) {
			case 'value':
				# code...
				break;

			default:
				redirect(base_url());
				break;
		}
	}

	public function login()
	{
		$this->load->view('pages/login');
	}
	public function register()
	{
		$this->load->view('pages/register');
	}
	public function subscription()
	{
		$this->load->view('pages/subscription');
	}
}
