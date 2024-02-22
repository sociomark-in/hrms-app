<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'core/My_controller.php');

class OnboardingController extends My_Controller
{
	public $data;
	public function home(){
		$this->load->model("org_settings/HolidaysModel");
		$this->data['org_holidays'] = json_decode($this->HolidaysModel->get(["title", "from_date", "to_date"]), true);
		// print_r($this->data['org_holidays']);die;
		$this->load->onboarding_view("onboarding/home", $this->data);
	}
}
