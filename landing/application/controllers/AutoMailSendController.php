<?php

class AutoMailSendController extends CI_Controller
{
	public function __construct()
	{
		$this->load->config('automail');
		$this->load->library('email');
	}

	public function welcome_onboard($step){
		switch ($step) {
			case 'register':
				# registration successful
				break;
			
			default:
				# code...
				break;
		}
	}
}
