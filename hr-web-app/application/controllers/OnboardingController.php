<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'core/My_controller.php');

class OnboardingController extends My_Controller
{
	public function home(){
		$this->load->onboarding_view("onboarding/home");
	}
}
