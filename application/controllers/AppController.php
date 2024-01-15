<?php

class AppController extends CI_Controller
{
	public $data = [];
	public function __construct()
	{
		parent::__construct();
	}
	
	public function home(){
		$this->data['settings']['holidays'] = json_decode($this->HolidaysModel->get(), true);
		$this->load->view('dashboard/home', $this->data);
	}
}

